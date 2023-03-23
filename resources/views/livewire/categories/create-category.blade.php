<div>
    <x-button class="ml-4" wire:click="$set('openModal', true)">
        Create
    </x-button>

    @if($openModal)
        <x-form-section submit="create" wire:model="openModal">
            <x-slot name="title">
                Create Category
            </x-slot>
            <x-slot name="form">
                <div class="col-span-6">
                    <x-label for="title" value="Title" />
                    <x-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="state.title" autofocus />
                    <x-input-error for="title" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="parent_id" value="Parent" />
                    <x-select id="parent_id" placeholder="select option" class="mt-1 block w-full" wire:model.defer="state.parent_id">
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
                    Create
                </x-button>
            </x-slot>
        </x-form-section>
    @endif
</div>
