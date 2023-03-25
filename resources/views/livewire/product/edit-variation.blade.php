<div>
    @if($openModal)
        <x-form-section submit="update" wire:model="openModal">
            <x-slot name="title">
                Update Variation
            </x-slot>
            <x-slot name="form">
                <div class="col-span-6">
                    <x-label for="title" value="Title" />
                    <x-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="state.title" autofocus />
                    <x-input-error for="title" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="type" value="Type" />
                    <x-input id="type" type="text" class="mt-1 block w-full" wire:model.defer="state.type" />
                    <x-input-error for="type" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="price" value="Price" />
                    <x-input id="price" type="number" class="mt-1 block w-full" wire:model.defer="state.price" />
                    <x-input-error for="price" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="sku" value="Sku" />
                    <x-input id="sku" type="text" class="mt-1 block w-full" wire:model.defer="state.sku" />
                    <x-input-error for="sku" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="order" value="Order" />
                    <x-input id="order" type="number" class="mt-1 block w-full" wire:model.defer="state.order" />
                    <x-input-error for="order" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="parent_id" value="Parent" />
                    <x-select id="parent_id" placeholder="select option" class="mt-1 block w-full" wire:model.defer="state.parent_id">
                        <option></option>
                        @foreach ($this->parents as $parent)
                            <option value="{{$parent->id}}">{{$parent->title}}</option>
                        @endforeach
                    </x-select>
                    <x-input-error for="parent_id" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-button>
                    Update
                </x-button>
            </x-slot>
        </x-form-section>
    @endif
</div>
