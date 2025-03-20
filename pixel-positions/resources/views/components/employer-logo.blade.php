@props(['employer', 'width' => 100])

<img
   {{-- src="https://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}" --}}
   src="{{ asset($employer->logo) }}"
   alt=""
   class="rounded-xl"
   width="{{ $width }}"
>
