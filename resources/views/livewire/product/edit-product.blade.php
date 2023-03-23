<form wire:submit.prevent="update">
    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

           <div class="col-span-6">
               <x-label for="title" value="Title" />
               <x-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="state.title" />
               <x-input-error for="title" class="mt-2" />
           </div>
           <div class="col-span-6">
               <x-label for="description" value="Description" />
               <x-textarea rows="6" id="description" type="text" class="mt-1 block w-full" wire:model.defer="state.description"/>
               <x-input-error for="description" class="mt-2" />
           </div>
           <div class="col-span-2">
               <x-label for="price" value="Price" />
               <x-input step="any" id="price" type="text" class="mt-1 block w-full" wire:model.defer="state.price"/>
               <x-input-error for="price" class="mt-2" />
           </div>

           <div class="col-span-6 flex items-center justify-end">
               <x-button>
                   Update
               </x-button>
           </div>
    </div>
</form>
