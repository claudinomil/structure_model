<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $tableNumCols = 0;
    public $tableColsNames = [];
    public $tableColsFields = [];
    public $tableColAcoes = false;
    public $tableColAcoesInfoAlert = '';
    public $tableDados = '';

    public function __construct($numCols = [], $colsNames, $colsFields, $colAcoes, $colAcoesInfoAlert, $dados)
    {
        $this->tableNumCols = $numCols;
        $this->tableColsNames = $colsNames;
        $this->tableColsFields = $colsFields;
        $this->tableColAcoes = $colAcoes;
        $this->tableColAcoesInfoAlert = $colAcoesInfoAlert;
        $this->tableDados = $dados;
    }

    public function render()
    {
        return view('components.table');
    }
}
