<!DOCTYPE html>
<html
   lang="en"
   class="h-full bg-gray-100"
>

<head>
   <meta charset="UTF-8">
   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
   >
   <title>Home Page
   </title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
   <div class="min-h-full">
      <nav class="bg-gray-800">
         <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
               <div class="flex items-center">
                  <div class="shrink-0">
                     <img
                        class="size-8"
                        src="https://laracasts.com/images/logo/logo-triangle.svg"
                        alt="Your Company"
                     >
                  </div>
                  <div class="hidden md:block">
                     <div class="flex items-baseline ml-10 space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-navLink
                           href="/"
                           :active="request()->is('/')"
                        >Home</x-navLink>
                        <x-navLink
                           href="/jobs"
                           :active="request()->is('jobs')"
                        >Jobs</x-navLink>
                        <x-navLink
                           href="/contact"
                           :active="request()->is('contact')"
                        >Contact</x-navLink>
                     </div>
                  </div>
               </div>
               <div class="hidden md:block">
                  <div class="flex items-center ml-4 md:ml-6">
                     @guest
                        <x-navLink
                           href="/login"
                           :acive="request()->is('login')"
                        >Log In</x-navLink>
                        <x-navLink
                           href="/register"
                           :active="request()->is('register')"
                        >Register</x-navLink>
                     @endguest

                     @auth
                        <form
                           method="POST"
                           action="/logout"
                        >
                           @csrf
                           <x-form-button>Log Out</x-form-button>
                        </form>
                     @endauth
                  </div>
               </div>
               <div class="flex -mr-2 md:hidden">
                  @guest
                     <x-navLink
                        href="/login"
                        :active="request()->is('login')"
                     >Log In</x-navLink>
                     <x-navLink
                        href="/register"
                        :active="request()->is('register')"
                     >Register</x-navLink>
                  @endguest
               </div>
            </div>
         </div>

         <!-- Mobile menu, show/hide based on menu state. -->
         <div
            class="md:hidden"
            id="mobile-menu"
         >
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
               <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
               <a
                  href="/"
                  class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md"
                  aria-current="page"
               >Home</a>
               <a
                  href="/about"
                  class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white"
               >About</a>
               <a
                  href="/contact"
                  class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white"
               >Contact</a>

            </div>
            <div class="pt-4 pb-3 border-t border-gray-700">
               <div class="flex items-center px-5">
                  <div class="shrink-0">
                     <img
                        class="rounded-full size-10"
                        src="https://laracasts.com/images/lary-ai-face.svg"
                        alt=""
                     >
                  </div>
                  <div class="ml-3">
                     <div class="font-medium text-white text-base/5">
                        Lary
                        Robot
                     </div>
                     <div class="text-sm font-medium text-gray-400">
                        rupam.irp@gmail.com
                     </div>
                  </div>
                  <button
                     type="button"
                     class="relative p-1 ml-auto text-gray-400 bg-gray-800 rounded-full shrink-0 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                  >
                     <span class="absolute -inset-1.5"></span>
                     <span class="sr-only">View
                        notifications</span>
                     <svg
                        class="size-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                        data-slot="icon"
                     >
                        <path
                           stroke-linecap="round"
                           stroke-linejoin="round"
                           d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                        />
                     </svg>
                  </button>
               </div>

            </div>
         </div>
      </nav>

      <header class="bg-white shadow-sm">
         <div
            class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:flex sm:justify-between"
         >
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
               {{ $heading }}
            </h1>

            @auth
               <x-button href="/jobs/create">Create
                  Job</x-button>
            @endauth
         </div>

      </header>
      <main>
         <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{ $slot }}
         </div>
      </main>
   </div>

</body>

</html>
