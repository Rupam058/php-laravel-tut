@props(['label', 'name'])

@php
   $defaults = [
       'type' => 'checkbox',
       'id' => $name,
       'name' => $name,
       'value' => old($name),
   ];
@endphp

<x-forms.field
   :$label
   :$name
>
   <div class="w-full px-4 py-5 border border-white/10 rounded-xl bg-white/10">
      <input {{ $attributes($defaults) }}>
      <span class="pl-1">{{ $label }}</span>
   </div>
</x-forms.field>
