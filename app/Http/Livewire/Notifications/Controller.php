<?php

namespace App\Http\Livewire\Notifications;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Controller extends Component
{
    public $dadosTabela;
    public $registro_id, $date, $time, $title, $notification, $user_id, $user;

    public $showMode = false;
    public $updateMode = false;
    public $createMode = false;
    public $deleteMode = false;

    public $notificationRead = false;

    public $isDisabled = '';

    protected $listeners = ['destroy', 'show', 'edit'];

    public function render()
    {
        //notifications-read: manda o id da notificaçao como parametro, grava como lida e mostra a view direto da função show()
        if (($this->registro_id) and ($this->notificationRead)) {
            $this->show($this->registro_id);
        }

        //Dados para colocar na Tabela
        $this->dadosTabela = \Illuminate\Support\Facades\DB::select(
            "SELECT notifications.*, users.name as user_name FROM notifications 
                    INNER JOIN users ON users.id=notifications.user_id");

        //Mostranr View
        return view('livewire.notifications.controller');
    }

    private function resetInputFields()
    {
        $this->registro_id = '';
        $this->date = date('Y-m-d');
        $this->time = date('H:i:s');
        $this->title = '';
        $this->notification = '';
        $this->user_id = Auth::user()->id;
    }

    public function create()
    {
        $this->showMode = false;
        $this->updateMode = false;
        $this->createMode = true;
        $this->deleteMode = false;
        $this->isDisabled = '';

        $this->resetInputFields();
    }

    public function store()
    {
        $validatedDate = $this->validate(
            [
                'date' => 'required',
                'time' => 'required',
                'title' => 'required',
                'notification' => 'required',
                'user_id' => 'required',
            ],
            [
                'date.required' => 'Preenchimento obrigatório',
                'time.required' => 'Preenchimento obrigatório',
                'title.required' => 'Preenchimento obrigatório',
                'notification.required' => 'Preenchimento obrigatório',
                'user_id.required' => 'Preenchimento obrigatório',
            ]
        );

        Notification::create($validatedDate);

        $this->showMode = false;
        $this->updateMode = false;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = '';

        $this->alertSwal('Registro incluído com sucesso.');

        $this->resetInputFields();
    }

    public function show($id)
    {
        $registro = Notification::findOrFail($id);

        $this->registro_id = $id;
        $this->date = $registro->date;
        $this->time = $registro->time;
        $this->title = $registro->title;
        $this->notification = $registro->notification;
        $this->user_id = $registro->user_id;
        $this->user = User::findOrFail($registro->user_id)->name;

        $this->showMode = true;
        $this->updateMode = false;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = 'disabled';

        //Verificar se Notificação foi lida (Se não foi então gravar registro na tabela notifications_read
        $lida = DB::table('notifications_read')->where([
            ['notification_id', '=', $this->registro_id],
            ['user_id', '=', Auth::user()->id]
        ])->get();

        if ($lida->isEmpty()) {
            DB::table('notifications_read')->insert([
                'notification_id' => $this->registro_id,
                'user_id' => Auth::user()->id,
                'date' => date('Y-m-d'),
                'time' => date('H:i:s')
            ]);
        }
    }

    public function edit($id)
    {
        $registro = Notification::findOrFail($id);

        $this->registro_id = $id;
        $this->date = $registro->date;
        $this->time = $registro->time;
        $this->title = $registro->title;
        $this->notification = $registro->notification;
        $this->user_id = $registro->user_id;

        $this->showMode = false;
        $this->updateMode = true;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = '';
    }

    public function cancel()
    {
        $this->showMode = false;
        $this->updateMode = false;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = '';

        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate(
            [
                'date' => 'required',
                'time' => 'required',
                'title' => 'required',
                'notification' => 'required',
                'user_id' => 'required',
            ],
            [
                'date.required' => 'Preenchimento obrigatório',
                'time.required' => 'Preenchimento obrigatório',
                'title.required' => 'Preenchimento obrigatório',
                'notification.required' => 'Preenchimento obrigatório',
                'user_id.required' => 'Preenchimento obrigatório',
            ]
        );

        $registro = Notification::find($this->registro_id);

        $registro->update([
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'title' => $this->title,
            'notification' => $this->notification,
            'user_id' => Auth::user()->id,
        ]);

        $this->showMode = false;
        $this->updateMode = false;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = '';

        $this->alertSwal('Registro alterado com sucesso.');

        $this->resetInputFields();
    }

    public function destroy($id)
    {
        $registro = Notification::findOrFail($id);

        $registro->delete();

        $this->showMode = false;
        $this->updateMode = false;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = '';

        $this->alertSwal('Registro excluído com sucesso.');

        $this->resetInputFields();
    }

    public function alertSwal($message = '', $type = 'success', $text = '', $showConfirmButton = false, $timer = 2000)
    {
        //Modal com Mensagem
        $this->dispatchBrowserEvent('swal:modal', [
            'message' => $message,
            'type' => $type,
            'text' => $text,
            'showConfirmButton' => $showConfirmButton,
            'timer' => $timer
        ]);
    }
}
