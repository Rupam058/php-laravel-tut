<x-layout>
   <x-slot:heading>
      Registration for a new user
   </x-slot:heading>

   <form
      method="POST"
      action="/register"
   >
      @csrf
      <div class="space-y-12">
         <div class="border-b border-gray-900/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
               {{-- First Name field --}}
               <x-form-field>
                  <x-form-label for="first_name">First Name</x-form-label>
                  <div class="mt-2">
                     <x-form-input
                        type="text"
                        name="first_name"
                        id="first_name"
                        required
                     />
                     <x-form-error name='first_name' />
                  </div>
               </x-form-field>

               {{-- Last Name field --}}
               <x-form-field>
                  <x-form-label for="Last_name">Last Name</x-form-label>
                  <div class="mt-2">
                     <x-form-input
                        type="text"
                        name="Last_name"
                        id="Last_name"
                        required
                     />
                     <x-form-error name='Last_name' />
                  </div>
               </x-form-field>

               {{-- Email form field --}}
               <x-form-field>
                  <x-form-label for="email">Email</x-form-label>
                  <div class="mt-2">
                     <x-form-input
                        type="email"
                        name="email"
                        id="email"
                        required
                     />
                     <x-form-error name='email' />
                  </div>
               </x-form-field>

               {{-- Password form field --}}
               <x-form-field>
                  <x-form-label for="password">Password</x-form-label>
                  <div class="mt-2">
                     <x-form-input
                        type="password"
                        name="password"
                        id="password"
                        required
                     />
                     <x-form-error name='password' />
                  </div>
               </x-form-field>

               {{-- Re enter Password form field --}}
               <x-form-field>
                  <x-form-label for="password_confirmation">Password
                     Confirmation</x-form-label>
                  <div class="mt-2">
                     <x-form-input
                        type="password_confirmation"
                        name="password_confirmation"
                        id="password_confirmation"
                        required
                     />
                     <x-form-error name='password_confirmation' />
                  </div>
               </x-form-field>

            </div>
         </div>


      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
         <a
            href='/'
            class="text-sm/6 font-semibold text-gray-900"
         >Cancel</a>
         <x-form-button>Register</x-form-button>
      </div>
   </form>


</x-layout>
