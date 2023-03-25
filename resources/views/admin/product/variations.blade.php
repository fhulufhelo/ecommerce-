<x-app-layout>
    <div class="flex-1 flex flex-col bg-white">
        <main class="flex-1 overflow-y-auto focus:outline-none">
            <div class="mt-6 relative max-w-7xl mx-auto md:px-8 xl:px-0">
                <div class="pt-10 pb-16">
                    <div class="px-4 sm:px-6 md:px-0">
                        <h1 class="text-3xl font-extrabold text-gray-900">Product Variations: {{$product->title}}</h1>
                    </div>
                    <div class="px-4 sm:px-6 md:px-0">
                        <div class="py-6">
                            <x-nav.product :productId="$product->id"/>
                            <div class="mt-6 flex items-center justify-end">
                                <livewire:product.create-variation :product="$product" />
                            </div>
                            <div class="mt-10 divide-y divide-gray-200">
                                <livewire:product.list-variation :product="$product" />
                                <livewire:product.edit-variation :product="$product"/>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</x-app-layout>
