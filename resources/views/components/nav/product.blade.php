@props(['productId'])

<div class="hidden lg:block">
    <div class="border-b border-gray-200">
        <nav class="-mb-px flex space-x-8">

            <x-tab-link href="{{ route('products.edit',[$productId]) }}" :active="request()->routeIs('products.edit')">
                Edit
            </x-tab-link>

            <x-tab-link href="{{ route('products.variations',[$productId]) }}" :active="request()->routeIs('products.variations')">
                Variations
            </x-tab-link>
        </nav>
    </div>
</div>
