<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
   >
   @vite(['resources/js/app.js', 'resources/css/app.css'])
   <title>Pixel Position</title>
</head>

<body class="text-white bg-custom-black">
   <div class="px-10">
      <nav
         class="flex items-center justify-between py-4 border-b border-white/10"
      >
         <div>
            <a href="/">
               <img src="{{ Vite::asset('resources/images/logo.svg') }}">
            </a>
         </div>

         <div class="space-x-6 font-bold">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
         </div>

         <div>
            Post a Job
         </div>
      </nav>

      <main class="mt-10 max-w-[968px] mx-auto">
         {{ $slot }}
      </main>
   </div>
</body>

</html>
