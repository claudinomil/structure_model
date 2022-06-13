<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(($createMode) or ($updateMode) or ($deleteMode) or ($showMode))
                        @include('livewire.notifications.form')
                    @else
                        <!-- Botoes -->
                        <div class="row">
                            <div class="col-12">
                                <x-button op="1" wire:click="create()" />
                            </div>
                        </div>

                        <!-- Tabela (Componente Blade) -->
                        @php
                            $colsNames = ['Data', 'Hora', 'Título', 'Notificação'];
                            $colsFields = ['date', 'time', 'title', 'notification'];
                        @endphp

                        <x-table :numCols="4" :colsNames=$colsNames :colsFields=$colsFields :colAcoes="true" :colAcoesInfoAlert="'title'" :dados=$dadosTabela />
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
