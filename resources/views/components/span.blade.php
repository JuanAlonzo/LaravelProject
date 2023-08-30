@props(['state'])

@php
    $bgColor = $state == 'Disponible' 
                    ? 'bg-blue-200' 
                    : 'bg-red-200';
                    
    $textColor = $state == 'Disponible' 
                    ? 'text-blue-600' 
                    : 'text-red-600';
@endphp

<span class="py-1 px-3 rounded-full text-xs {{ $bgColor }} {{ $textColor }}">
    {{ $state }}
</span>