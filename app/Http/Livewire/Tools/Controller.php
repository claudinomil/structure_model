<?php

namespace App\Http\Livewire\Tools;

use Livewire\Component;
use App\Models\Tool;

class Controller extends Component
{
    public $dadosTabela;
    public $registro_id, $name, $descricao, $url, $icon, $ordem_visualizacao;
    public $showMode = false;
    public $updateMode = false;
    public $createMode = false;
    public $deleteMode = false;
    public $isDisabled = '';

    protected $listeners = ['destroy', 'show', 'edit'];

    public function render()
    {
        //Dados para colocar na Tabela
        $this->dadosTabela = Tool::all();

        //Mostranr View
        return view('livewire.tools.controller');
    }

    private function resetInputFields()
    {
        $this->registro_id = '';
        $this->name = '';
        $this->descricao = '';
        $this->url = '';
        $this->icon = '';
        $this->ordem_visualizacao = '';
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
                'name' => 'required',
                'descricao' => 'required',
                'url' => 'required',
                'icon' => 'required',
                'ordem_visualizacao' => 'required',
            ],
            [
                'name.required' => 'Preenchimento obrigatório',
                'descricao.required' => 'Preenchimento obrigatório',
                'url.required' => 'Preenchimento obrigatório',
                'icon.required' => 'Preenchimento obrigatório',
                'ordem_visualizacao.required' => 'Preenchimento obrigatório',
            ]
        );

        Tool::create($validatedDate);

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
        $registro = Tool::findOrFail($id);

        $this->registro_id = $id;
        $this->name = $registro->name;
        $this->descricao = $registro->descricao;
        $this->url = $registro->url;
        $this->icon = $registro->icon;
        $this->ordem_visualizacao = $registro->ordem_visualizacao;

        $this->showMode = true;
        $this->updateMode = false;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = 'disabled';
    }

    public function edit($id)
    {
        $registro = Tool::findOrFail($id);

        $this->registro_id = $id;
        $this->name = $registro->name;
        $this->descricao = $registro->descricao;
        $this->url = $registro->url;
        $this->icon = $registro->icon;
        $this->ordem_visualizacao = $registro->ordem_visualizacao;

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
                'name' => 'required',
                'descricao' => 'required',
                'url' => 'required',
                'icon' => 'required',
                'ordem_visualizacao' => 'required',
            ],
            [
                'name.required' => 'Preenchimento obrigatório',
                'descricao.required' => 'Preenchimento obrigatório',
                'url.required' => 'Preenchimento obrigatório',
                'icon.required' => 'Preenchimento obrigatório',
                'ordem_visualizacao.required' => 'Preenchimento obrigatório',
            ]
        );

        $registro = Tool::find($this->registro_id);

        $registro->update([
            'name' => $this->name,
            'descricao' => $this->descricao,
            'url' => $this->url,
            'icon' => $this->icon,
            'ordem_visualizacao' => $this->ordem_visualizacao,
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
        $registro = Tool::findOrFail($id);

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
