<?php

namespace App\Http\Livewire\Modules;

use Livewire\Component;
use App\Models\Module;

class Controller extends Component
{
    public $dadosTabela;
    public $registro_id, $name, $menu_text, $menu_url, $menu_route, $menu_icon, $ordem_visualizacao;
    public $showMode = false;
    public $updateMode = false;
    public $createMode = false;
    public $deleteMode = false;
    public $isDisabled = '';

    protected $listeners = ['destroy', 'show', 'edit'];

    public function render()
    {
        //Dados para colocar na Tabela
        $this->dadosTabela = Module::all();

        //Mostranr View
        return view('livewire.modules.controller');
    }

    private function resetInputFields()
    {
        $this->registro_id = '';
        $this->name = '';
        $this->menu_text = '';
        $this->menu_url = '';
        $this->menu_route = '';
        $this->menu_icon = '';
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
                'menu_text' => 'required',
                'menu_url' => 'required',
                'menu_route' => 'required',
                'menu_icon' => 'required',
                'ordem_visualizacao' => 'required',
            ],
            [
                'name.required' => 'Preenchimento obrigatório',
                'menu_text.required' => 'Preenchimento obrigatório',
                'menu_url.required' => 'Preenchimento obrigatório',
                'menu_route.required' => 'Preenchimento obrigatório',
                'menu_icon.required' => 'Preenchimento obrigatório',
                'ordem_visualizacao.required' => 'Preenchimento obrigatório',
            ]
        );

        Module::create($validatedDate);

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
        $registro = Module::findOrFail($id);

        $this->registro_id = $id;
        $this->name = $registro->name;
        $this->menu_text = $registro->menu_text;
        $this->menu_url = $registro->menu_url;
        $this->menu_route = $registro->menu_route;
        $this->menu_icon = $registro->menu_icon;
        $this->ordem_visualizacao = $registro->ordem_visualizacao;

        $this->showMode = true;
        $this->updateMode = false;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = 'disabled';
    }

    public function edit($id)
    {
        $registro = Module::findOrFail($id);

        $this->registro_id = $id;
        $this->name = $registro->name;
        $this->menu_text = $registro->menu_text;
        $this->menu_url = $registro->menu_url;
        $this->menu_route = $registro->menu_route;
        $this->menu_icon = $registro->menu_icon;
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
                'menu_text' => 'required',
                'menu_url' => 'required',
                'menu_route' => 'required',
                'menu_icon' => 'required',
                'ordem_visualizacao' => 'required',
            ],
            [
                'name.required' => 'Preenchimento obrigatório',
                'menu_text.required' => 'Preenchimento obrigatório',
                'menu_url.required' => 'Preenchimento obrigatório',
                'menu_route.required' => 'Preenchimento obrigatório',
                'menu_icon.required' => 'Preenchimento obrigatório',
                'ordem_visualizacao.required' => 'Preenchimento obrigatório',
            ]
        );

        $registro = Module::find($this->registro_id);

        $registro->update([
            'name' => $this->name,
            'menu_text' => $this->menu_text,
            'menu_url' => $this->menu_url,
            'menu_route' => $this->menu_route,
            'menu_icon' => $this->menu_icon,
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
        $registro = Module::findOrFail($id);

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
