<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $op;

    public $type;
    public $class;
    public $dataBsToggle;
    public $dataBsPlacement;
    public $title;
    public $imageAwesome;
    public $label;

    public function __construct($op)
    {
        $this->op = $op;
    }

    public function render()
    {
        //Botão Custom
        if ($this->op == 0) {}

        //Botão Adicionar Registro (CRUD)
        if ($this->op == 1) {
            $this->type = "button";
            $this->class = "btn btn-success waves-effect btn-label waves-light";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Adicionar Registro";
            $this->imageAwesome = "bx bx-plus label-icon";
            $this->label = "Adicionar Registro";
        }

        //Botão Alterar Registro (CRUD)
        if ($this->op == 2) {
            $this->type = "button";
            $this->class = "btn btn-primary waves-effect btn-label waves-light";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Alterar Registro";
            $this->imageAwesome = "bx bx-edit label-icon";
            $this->label = "Alterar Registro";
        }

        //Botão Excluir Registro (CRUD)
        if ($this->op == 3) {
            $this->type = "button";
            $this->class = "btn btn-danger waves-effect btn-label waves-light";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Excluir Registro";
            $this->imageAwesome = "bx bx-trash label-icon";
            $this->label = "Excluir Registro";
        }

        //Botão Cancelar Operação (CRUD)
        if ($this->op == 4) {
            $this->type = "button";
            $this->class = "btn btn-secondary waves-effect btn-label waves-light";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Cancelar Operação";
            $this->imageAwesome = "bx bx-x label-icon";
            $this->label = "Cancelar Operação";
        }

        //Botão Confirmar Inclusão (CRUD)
        if ($this->op == 5) {
            $this->type = "button";
            $this->class = "btn btn-success waves-effect btn-label waves-light";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Confirmar Inclusão";
            $this->imageAwesome = "bx bx-save label-icon";
            $this->label = "Confirmar Inclusão";
        }

        //Botão Confirmar Alteração (CRUD)
        if ($this->op == 6) {
            $this->type = "button";
            $this->class = "btn btn-primary waves-effect btn-label waves-light";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Confirmar Alteração";
            $this->imageAwesome = "bx bx-save label-icon";
            $this->label = "Confirmar Alteração";
        }

        //Botão Visualizar Registro (CRUD) - min
        if ($this->op == 7) {
            $this->type = "button";
            $this->class = "btn btn-info text-white text-center";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Visualizar Registro";
            $this->imageAwesome = "fa fa-eye";
            $this->label = "";
        }

        //Botão Alterar Registro (CRUD) - min
        if ($this->op == 8) {
            $this->type = "button";
            $this->class = "btn btn-primary text-white text-center";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Alterar Registro";
            $this->imageAwesome = "fa fa-edit";
            $this->label = "";
        }

        //Botão Excluir Registro (CRUD) - min
        if ($this->op == 9) {
            $this->type = "button";
            $this->class = "btn btn-danger text-white text-center";
            $this->dataBsToggle = "tooltip";
            $this->dataBsPlacement = "top";
            $this->title = "Excluir Registro";
            $this->imageAwesome = "fa fa-trash-alt";
            $this->label = "";
        }

        return view('components.button');
    }
}
