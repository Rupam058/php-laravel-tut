<form
   {{ $attributes(['class' => 'max-w-2xl mx-auto space-y-8', 'method' => 'GET']) }}
>
   @if ($attributes->get('method', 'GET') !== 'GET')
      @csrf
      @method($attributes->get('method'))
   @endif

   {{ $slot }}
</form>
