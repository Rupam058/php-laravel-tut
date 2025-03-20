@php
   $optionClasses = 'hover:bg-gray-700 bg-gray-800 text-white';
@endphp

<x-layout>
   <x-page-heading>New Job</x-page-heading>

   <x-forms.form
      method="POST"
      action="/jobs"
   >
      <x-forms.input
         label="Title"
         name="title"
         placeholder="CEO"
      />
      <x-forms.input
         label="Salary"
         name="salary"
         placeholder="$60,000"
      />
      <x-forms.input
         label="Location"
         name="location"
         placeholder="Winter Park, Florida"
      />

      <x-forms.select
         label="Schedule"
         name="schedule"
      >
         <option class="{{ $optionClasses }}">Part Time</option>
         <option class="{{ $optionClasses }}">Full Time</option>
      </x-forms.select>

      <x-forms.input
         label="Company job post URL"
         name="url"
         placeholder="https://acme.com/jobs/ceo-wanted"
      />

      <x-forms.checkbox
         label="Featured (Cost extra)"
         name="featured"
      />

      <x-forms.input
         label='Tags (comma separated)'
         name="tags"
         placeholder="Laracast, video, education"
      />

      <x-forms.button>Publish</x-forms.button>
   </x-forms.form>
</x-layout>
