<form>
    <!-- Botoes -->
    <div class="row">
        <div class="col-12">
            @if($createMode)
                <x-button op="5" wire:click.prevent="store()" />
                <x-button op="4" wire:click.prevent="cancel()" />
            @endif

            @if($updateMode)
                @if(Auth::user()->id == $user_id)
                    <x-button op="6" wire:click.prevent="update()" />
                @endif

                <x-button op="4" wire:click.prevent="cancel()" />
            @endif

            @if($showMode)
                <!-- notifications-read: mostra um botao para reiniciar o componente -->
                @if($notificationRead)
                        <a href="{{ route('notifications') }}" class="btn btn-info waves-effect btn-label waves-light" dataBsToggle="tooltip" dataBsPlacement="top" title = "ver Notificações"><i class="bx bx-layer label-icon"></i>Notificações</a>
                @else
                    @if(Auth::user()->id == $user_id)
                        <x-button op="2" wire:click.prevent="edit({{ $registro_id }})" />
                        <x-button op="3" wire:click.prevent="$emit('triggerDestroy', {{ $registro_id }}, '{{ $title }}')" />
                    @endif

                    <x-button op="4" wire:click.prevent="cancel()" />
                @endif
            @endif
        </div>
    </div>

    <input type="hidden" id="showMode" value="{{ $showMode }}">
    <input type="hidden" id="updateMode" value="{{ $updateMode }}">
    <input type="hidden" id="createMode" value="{{ $createMode }}">
    <input type="hidden" id="deleteMode" value="{{ $deleteMode }}">

    <!-- Campos -->
    <div class="row mt-4">

        @if($showMode)
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <label class="form-label">Data</label>
                    <input type="text" class="form-control" wire:model="date" {{ $isDisabled }}>
                    @error('date') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <label class="form-label">Hora</label>
                    <input type="text" class="form-control" wire:model="time" {{ $isDisabled }}>
                    @error('time') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <label class="form-label">Usuário</label>
                    <input type="hidden" wire:model="user_id">
                    <input type="text" class="form-control" wire:model="user" {{ $isDisabled }}>
                    @error('user_id') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
        @endif

        <div class="col-12 col-md-12">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" class="form-control" wire:model="title" {{ $isDisabled }}>
                @error('title') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-12 col-md-12">
            <div class="mb-3">
                <label class="form-label">Notificação</label>
                <textarea class="form-control" wire:model="notification" {{ $isDisabled }}></textarea>
                @error('notification') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
</form>
