<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                @if(($createMode) or ($updateMode) or ($deleteMode) or ($showMode))
                    @include('livewire.tools.form')
                @else
                    <!-- Botoes -->
                        <div class="row">
                            <div class="col-12">
                                <x-button op="1" wire:click="create()" />
                            </div>
                        </div>

                        <!-- Tabela -->
                        @php
                            $colsNames = ['Name', 'Descrição'];
                            $colsFields = ['name', 'descricao'];
                        @endphp

                        <x-table :numCols="3" :colsNames=$colsNames :colsFields=$colsFields :colAcoes="true" :colAcoesInfoAlert="'name'" :dados=$dadosTabela />
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
