@props(['width' => 100])

<img
   src="https://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}"
   alt="Placeholder"
   class="rounded-xl"
>
