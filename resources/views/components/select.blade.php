@props([
'placeholder' => null,
'trailingAddOn' => null,
])

<div class="flex">
    <select {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm' . ($trailingAddOn ? ' rounded-r-none' : '')]) }}>
        @if ($placeholder)
            <option disabled value="">{{ $placeholder }}</option>
        @endif

        {{ $slot }}
    </select>

    @if ($trailingAddOn)
        {{ $trailingAddOn }}
    @endif
</div>
