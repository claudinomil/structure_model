<div>
    <div class="table-responsive pt-5">
        <table class="table table-bordered dt-responsive table-striped nowrap w-100 class-datatable">
            <thead>
                <tr>
                    <!-- Montando Colunas -->
                    @foreach($tableColsNames as $tableColName)
                        <th>{{ $tableColName }}</th>
                    @endforeach

                    <!-- Montando Coluna Ação -->
                    @if ($tableColAcoes)
                        <th width="200px">Ações</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($tableDados as $dado)
                    <tr>
                        <!-- Montando Colunas -->
                        @foreach($tableColsFields as $tableColField)
                            <td>{{ $dado->$tableColField }}</td>
                        @endforeach

                        <!-- Montando Coluna Ação -->
                        @if ($tableColAcoes)
                            <td class="text-center" style="vertical-align:top; white-space:nowrap;">
                                <!-- Chamando Evento do Componente Pai com $emitUp -->
                                <x-button op="7" wire:click="$emitUp('show', {{ $dado->id }})" />

                                <!-- Chamando Evento do Componente Pai com $emitUp -->
                                <x-button op="8" wire:click="$emitUp('edit', {{ $dado->id }})" />

                                <!-- Chamando Modal que possui a chamada para o Evento do Componente Pai com Livewire -->
                                <x-button op="9" wire:click="$emit('triggerDestroy', {{ $dado->id }}, '{{ $dado->$tableColAcoesInfoAlert }}')" />
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
