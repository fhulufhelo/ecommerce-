@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} rows="6" {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}></textarea>

