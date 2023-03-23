@props(['id' => null, 'maxWidth' => null, 'submit'])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <form wire:submit.prevent="{{ $submit }}">
        <div class="px-6 py-4">
            <x-section-title>
                <x-slot name="title">{{ $title }}</x-slot>
                <x-slot name="description">{{ $description ?? '' }}</x-slot>
            </x-section-title>
            <div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            {{ $form }}
                        </div>
                    </div>
            </div>
        </div>
        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
            {{ $footer }}
        </div>
    </form>
</x-modal>
