@props(['job'])

<x-panel class="flex flex-col text-center">

   <div class="self-start text-sm">{{ $job->employer->name }}</div>
   <div class="py-8">
      <h3
         class="text-xl font-bold duration-300 group-hover:text-blue-600 transition-color">
         <a
            href="{{ $job->url }}"
            target="_blank"
         >
            {{ $job->title }}
         </a>
      </h3>
      <p class="mt-4 text-sm">{{ $job->schedule }} - From {{ $job->salary }}</p>
   </div>

   <div class="flex items-center justify-between mt-auto">
      <div>
         @foreach ($job->tags as $tag)
            <x-tag
               :tag="$tag"
               size="small"
            ></x-tag>
         @endforeach
      </div>

      <x-employer-logo
         :employer="$job->employer"
         :width=42
      />
   </div>

</x-panel>
