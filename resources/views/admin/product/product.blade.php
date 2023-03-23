<x-app-layout>

    <x-slot name="header">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                Products
            </h1>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                    Products
                </h1>
                <div>
                    <livewire:product.create-product />
                </div>
            </div>
            <div class="mt-3 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:product.list-product />
                    <livewire:product.edit-product />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
