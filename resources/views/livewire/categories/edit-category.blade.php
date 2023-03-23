<div>
    @if($openModal)
        <x-form-section submit="update" wire:model="openModal">
            <x-slot name="title">
                Update Category
            </x-slot>
            <x-slot name="form">
                <div class="col-span-6">
                    <x-label for="title" value="Title" />
                    <x-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="state.title" autofocus />
                    <x-input-error for="title" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="parent_id" value="Parent" />
                    <x-select id="parent_id" class="mt-1 block w-full" wire:model.defer="state.parent_id">
                        <option></option>
                        @foreach ($this->categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
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
