<?php

namespace App\Http\Livewire\Submodules;

use App\Models\Module;
use Livewire\Component;
use App\Models\Submodule;

class Controller extends Component
{
    public $dadosTabela;
    public $modules;
    public $registro_id, $module_id, $name, $menu_text, $menu_url, $menu_route, $menu_icon, $prefix_permission, $prefix_route, $ordem_visualizacao;
    public $showMode = false;
    public $updateMode = false;
    public $createMode = false;
    public $deleteMode = false;
    public $isDisabled = '';

    protected $listeners = ['destroy', 'show', 'edit'];

    public function render()
    {
        //Dados para colocar na Tabela
        $this->dadosTabela = \Illuminate\Support\Facades\DB::select(
                "SELECT submodules.*, modules.name as module_name FROM submodules 
                        INNER JOIN modules ON modules.id=submodules.module_id");

        //Dados para popular Combobox's
        $this->modules = Module::all();

        //Mostranr View
        return view('livewire.submodules.controller');
    }

    private function resetInputFields()
    {
        $this->registro_id = '';
        $this->module_id = '';
        $this->name = '';
        $this->menu_text = '';
        $this->menu_url = '';
        $this->menu_route = '';
        $this->menu_icon = '';
        $this->prefix_permission = '';
        $this->prefix_route = '';
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
                'module_id' => 'required',
                'name' => 'required',
                'menu_text' => 'required',
                'menu_url' => 'required',
                'menu_route' => 'required',
                'menu_icon' => 'required',
                'prefix_permission' => 'required',
                'prefix_route' => 'required',
                'ordem_visualizacao' => 'required',
            ],
            [
                'module_id.required' => 'Preenchimento obrigatório',
                'name.required' => 'Preenchimento obrigatório',
                'menu_text.required' => 'Preenchimento obrigatório',
                'menu_url.required' => 'Preenchimento obrigatório',
                'menu_route.required' => 'Preenchimento obrigatório',
                'menu_icon.required' => 'Preenchimento obrigatório',
                'prefix_permission.required' => 'Preenchimento obrigatório',
                'prefix_route.required' => 'Preenchimento obrigatório',
                'ordem_visualizacao.required' => 'Preenchimento obrigatório',
            ]
        );

        Submodule::create($validatedDate);

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
        $registro = Submodule::findOrFail($id);

        $this->registro_id = $id;
        $this->module_id = $registro->module_id;
        $this->name = $registro->name;
        $this->menu_text = $registro->menu_text;
        $this->menu_url = $registro->menu_url;
        $this->menu_route = $registro->menu_route;
        $this->menu_icon = $registro->menu_icon;
        $this->prefix_permission = $registro->prefix_permission;
        $this->prefix_route = $registro->prefix_route;
        $this->ordem_visualizacao = $registro->ordem_visualizacao;

        $this->showMode = true;
        $this->updateMode = false;
        $this->createMode = false;
        $this->deleteMode = false;
        $this->isDisabled = 'disabled';
    }

    public function edit($id)
    {
        $registro = Submodule::findOrFail($id);

        $this->registro_id = $id;
        $this->module_id = $registro->module_id;
        $this->name = $registro->name;
        $this->menu_text = $registro->menu_text;
        $this->menu_url = $registro->menu_url;
        $this->menu_route = $registro->menu_route;
        $this->menu_icon = $registro->menu_icon;
        $this->prefix_permission = $registro->prefix_permission;
        $this->prefix_route = $registro->prefix_route;
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
                'module_id' => 'required',
                'name' => 'required',
                'menu_text' => 'required',
                'menu_url' => 'required',
                'menu_route' => 'required',
                'menu_icon' => 'required',
                'prefix_permission' => 'required',
                'prefix_route' => 'required',
                'ordem_visualizacao' => 'required',
            ],
            [
                'module_id.required' => 'Preenchimento obrigatório',
                'name.required' => 'Preenchimento obrigatório',
                'menu_text.required' => 'Preenchimento obrigatório',
                'menu_url.required' => 'Preenchimento obrigatório',
                'menu_route.required' => 'Preenchimento obrigatório',
                'menu_icon.required' => 'Preenchimento obrigatório',
                'prefix_permission.required' => 'Preenchimento obrigatório',
                'prefix_route.required' => 'Preenchimento obrigatório',
                'ordem_visualizacao.required' => 'Preenchimento obrigatório',
            ]
        );

        $registro = Submodule::find($this->registro_id);

        $registro->update([
            'module_id' => $this->module_id,
            'name' => $this->name,
            'menu_text' => $this->menu_text,
            'menu_url' => $this->menu_url,
            'menu_route' => $this->menu_route,
            'menu_icon' => $this->menu_icon,
            'prefix_permission' => $this->prefix_permission,
            'prefix_route' => $this->prefix_route,
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
        $registro = Submodule::findOrFail($id);

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
