<form>
    <!-- Botoes -->
    <div class="row">
        <div class="col-12">
            @if($createMode)
                <x-button op="5" wire:click.prevent="store()" />
                <x-button op="4" wire:click.prevent="cancel()" />
            @endif

            @if($updateMode)
                <x-button op="6" wire:click.prevent="update()" />
                <x-button op="4" wire:click.prevent="cancel()" />
            @endif

            @if($showMode)
                <x-button op="2" wire:click.prevent="edit({{ $registro_id }})" />
                <x-button op="3" wire:click.prevent="$emit('triggerDestroy', {{ $registro_id }}, '{{ $name }}')" />
                <x-button op="4" wire:click.prevent="cancel()" />
            @endif
        </div>
    </div>

    <input type="hidden" id="showMode" value="{{ $showMode }}">
    <input type="hidden" id="updateMode" value="{{ $updateMode }}">
    <input type="hidden" id="createMode" value="{{ $createMode }}">
    <input type="hidden" id="deleteMode" value="{{ $deleteMode }}">

    <!-- Campos -->
    <div class="row mt-4">
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Módulo</label>
                <!-- wire:ignore: Instrui o Livewire a não atualizar o elemento ou seus filhos ao atualizar o DOM de uma solicitação do servidor. -->
                <select class="form-control select2_module_id" id="module_id" name="module_id" {{ $isDisabled }} wire:ignore>
                    <option value="">Selecione...</option>

                    @foreach($modules as $module)
                        @php
                        $selected = "";

                        //Se for Alteração
                        if ($updateMode) {
                            if ($module_id == $module->id) {
                                $selected = "selected='selected'";
                            }
                        }

                        //Se for Visualização
                        if ($showMode) {
                            if ($module_id == $module->id) {
                                $selected = "selected='selected'";
                            }
                        }
                        @endphp

                        <option value="{{ $module->id }}" {{ $selected }}>{{ $module->name }}</option>
                    @endforeach
                </select>
                @error('module_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" wire:model="name" {{ $isDisabled }}>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Menu Texto</label>
                <input type="text" class="form-control" wire:model="menu_text" {{ $isDisabled }}>
                @error('menu_text') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Menu URL</label>
                <input type="text" class="form-control" wire:model="menu_url" {{ $isDisabled }}>
                @error('menu_url') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Menu Route</label>
                <input type="text" class="form-control" wire:model="menu_route" {{ $isDisabled }}>
                @error('menu_route') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Menu Ícone</label>
                <input type="text" class="form-control" wire:model="menu_icon" {{ $isDisabled }}>
                @error('menu_icon') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Prefix Permission</label>
                <input type="text" class="form-control" wire:model="prefix_permission" {{ $isDisabled }}>
                @error('prefix_permission') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Prefix Route</label>
                <input type="text" class="form-control" wire:model="prefix_route" {{ $isDisabled }}>
                @error('prefix_route') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <label class="form-label">Órdem de Visualização</label>
                <input type="number" class="form-control" wire:model="ordem_visualizacao" {{ $isDisabled }}>
                @error('ordem_visualizacao') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        <!-- Atualiza a variavel module_id no Componente -->
        $('.select2_module_id').on('change', function (e) {
            @this.set('module_id', e.target.value);
        });
    });
</script>
