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
   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
   <div class="min-h-full">
      <nav class="bg-gray-800">
         <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
               <div class="flex items-center">
                  <div class="shrink-0">
                     <img
                        class="size-8"
                        src="https://laracasts.com/images/logo/logo-triangle.svg"
                        alt="Your Company"
                     >
                  </div>
                  <div class="hidden md:block">
                     <div class="ml-10 flex items-baseline space-x-4">
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
                  <div class="ml-4 flex items-center md:ml-6">
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
                  </div>
               </div>
               <div class="-mr-2 flex md:hidden">
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
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
               <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
               <a
                  href="/"
                  class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                  aria-current="page"
               >Home</a>
               <a
                  href="/about"
                  class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
               >About</a>
               <a
                  href="/contact"
                  class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
               >Contact</a>

            </div>
            <div class="border-t border-gray-700 pt-4 pb-3">
               <div class="flex items-center px-5">
                  <div class="shrink-0">
                     <img
                        class="size-10 rounded-full"
                        src="https://laracasts.com/images/lary-ai-face.svg"
                        alt=""
                     >
                  </div>
                  <div class="ml-3">
                     <div class="text-base/5 font-medium text-white">
                        Lary
                        Robot
                     </div>
                     <div class="text-sm font-medium text-gray-400">
                        rupam.irp@gmail.com
                     </div>
                  </div>
                  <button
                     type="button"
                     class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
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
            class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between"
         >
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
               {{ $heading }}
            </h1>

            <x-button href="/jobs/create">Create
               Job</x-button>
         </div>

      </header>
      <main>
         <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
         </div>
      </main>
   </div>

</body>

</html>
