@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-indigo-200 border-gray-500 focus:border-gray-500 focus:ring-indigo-300 rounded-md shadow-sm']) !!}>
