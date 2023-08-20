@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-grey-500 focus:ring-grey-500 rounded-md shadow-sm']) !!}>
    {{ $slot }}
</select>