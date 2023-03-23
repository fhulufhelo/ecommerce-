<div>
    <x-button class="ml-4" wire:click="$set('openModal', true)">
        Create
    </x-button>

    @if($openModal)
        <x-form-section submit="create" wire:model="openModal">
            <x-slot name="title">
                Create Product
            </x-slot>
            <x-slot name="form">
                <div class="col-span-6">
                    <x-label for="title" value="Title" />
                    <x-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="state.title" autofocus />
                    <x-input-error for="title" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="description" value="Description" />
                    <x-textarea id="description" type="text" class="mt-1 block w-full" wire:model.defer="state.description"/>
                    <x-input-error for="description" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="price" value="Price" />
                    <x-input step="any" id="price" type="text" class="mt-1 block w-full" wire:model.defer="state.price"/>
                    <x-input-error for="price" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-button>
                    Create
                </x-button>
            </x-slot>
        </x-form-section>
    @endif
</div>
