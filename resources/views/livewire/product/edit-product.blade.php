<div>
    @if($openModal)
        <x-form-section submit="update" wire:model="openModal">
            <x-slot name="title">
                Edit Product
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
                <div class="col-span-6">
                    <x-label for="live_at" value="Live at" />
                    <x-date-time-picker type="text" name="live_at" id="live_at" wire:model.defer="state.live_at" />
                    <x-input-error for="live_at" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <fieldset>
                        <legend class="block font-medium text-sm text-gray-700">Select Category</legend>
                        <div class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">
                            @foreach ($this->categories as $category)
                                <div class="relative flex items-start py-4">
                                    <div class="min-w-0 flex-1 text-sm">
                                        <label for="categories-{{$category->id}}" class="font-medium text-gray-700 select-none">
                                            {{$category->title}}
                                        </label>
                                    </div>
                                    <div class="ml-3 flex items-center h-5">
                                        <input wire:model.defer="state.categories" value="{{$category->id}}" id="categories-{{$category->id}}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                    <x-input-error for="categories" class="mt-2" />
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
