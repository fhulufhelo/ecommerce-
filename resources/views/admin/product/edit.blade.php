<x-app-layout>
    <div class="flex-1 flex flex-col bg-white">
        <main class="flex-1 overflow-y-auto focus:outline-none">
            <div class="relative max-w-7xl mx-auto md:px-8 xl:px-0">
                <div class="pt-10 pb-16">
                    <div class="px-4 sm:px-6 md:px-0">
                        <h1 class="text-3xl font-extrabold text-gray-900">Edit Product: {{$product->title}}</h1>
                    </div>
                    <div class="px-4 sm:px-6 md:px-0">
                        <div class="py-6">
                            <div class="hidden lg:block">
                                <div class="border-b border-gray-200">
                                    <nav class="-mb-px flex space-x-8">

                                        <a href="#" class="border-purple-500 text-purple-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;border-purple-500 text-purple-600&quot;, Default: &quot;border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700&quot;">
                                            Edit
                                        </a>

                                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state-description="undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700&quot;">
                                            Variations
                                        </a>

                                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state-description="undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700&quot;">
                                            Gallery
                                        </a>

                                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state-description="undefined: &quot;border-purple-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700&quot;">
                                            Stoke
                                        </a>

                                    </nav>
                                </div>
                            </div>

                            <div class="mt-10 divide-y divide-gray-200">
                                <livewire:product.edit-product :product="$product" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</x-app-layout>
