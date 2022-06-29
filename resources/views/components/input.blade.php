@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-amber-300 focus:ring focus:ring-amber-200 focus:ring-opacity-50']) !!}>
