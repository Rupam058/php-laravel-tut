<x-layout>
   <div class="space-y-10">
      <section class="pt-6 text-center">
         <h1 class="text-4xl font-bold">Let's Find Your next Job</h1>

         <form
            action=''
            class="mt-6"
         >
            <input
               type="text"
               placeholder="Web Developer..."
               class="w-full max-w-xl px-5 py-4 border-white/10 bg-white/5 rounded-xl"
            >
         </form>
      </section>

      <section class="pt-10">
         <x-section-heading>Featured job</x-section-heading>

         <div class="grid gap-8 lg:grid-cols-3">
            <x-job-card />
            <x-job-card />
            <x-job-card />
         </div>
      </section>

      <section>
         <x-section-heading>Tags</x-section-heading>

         <div class="mt-6 space-x-1">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
         </div>
      </section>

      <section>
         <x-section-heading>Recent Jobs</x-section-heading>

         <div class="mt-6 space-y-6">
            <x-job-card-wide />
            <x-job-card-wide />
            <x-job-card-wide />
         </div>
      </section>
   </div>
</x-layout>
