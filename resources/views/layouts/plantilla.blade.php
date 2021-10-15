<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   <!-- favicon -->
   @yield('estilos')
</head>

<body>
   <!-- header -->
   <!-- nav -->
   @yield('nav')
   <nav class="bg-gray-700 text-white">
      <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
         <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
               <!-- Mobile Menu Button-->
               <!-- <button id="menu-button" class="inline=flex items-center justify-center p-2 rounded-md hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                     <span class="sr-only">Open main menu</span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
                     </svg>
               </button> -->
            </div>
            <div class="flex-1 flex sm:items-stretch sm:justify-start">
               <div class="flex-shrink-0 flex items-center justify-center">
                  <a href="/" class="flex items-center justify-center h-8 text-xl font-semibold w-auto"><img
                        src="{{ asset('img/logo.png') }}" alt="logo-lapicito" /></a>
               </div>
               <div class="hidden sm:flex sm:ml-6 items-center justify-center">
                  <a href="{{ route('categoria.show', 'electrodomesticos') }}"
                     class="hover:bg-gray-500 hover:text-white  px-3 py-2 rounded-md text-sm font-medium"
                     aria-current="page">Electrodomésticos</a>

                  <a href="{{ route('categoria.show', 'muebles') }}"
                     class="hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Muebles</a>

                  <a href="{{ route('categoria.show', 'ropa') }}"
                     class="hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Ropa</a>
               </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 ">
               <div class="flex items-center">
                  <div class="flex bg-gray-100 p-1 w-56 space-x-4 rounded-lg md:flex">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-30" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                     </svg>
                     <input class="bg-gray-100 outline-none w-full" type="text" placeholder="¿Qué estás buscando?"
                        name="buscar" id="buscar" autofocus />
                  </div>
                  <button class="p-1 rounded-full hover:text-gray-500">
                     <span class="sr-only">View notifications</span>
                     <a href="/usuario">
                        <svg class="logo-usuario" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                           <path
                              d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z" />
                        </svg>
                     </a>
                  </button>
                  <button class="p-1 rounded-full hover:text-gray-500 relative" id="carrito-nav">
                     <a href="/carrito">
                        <svg class="logo-carrito" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                           <path
                              d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z" />
                           <circle cx="10.5" cy="19.5" r="1.5" />
                           <circle cx="17.5" cy="19.5" r="1.5" />
                        </svg>
                     </a>
                     <div
                        class="hidden absolute bg-white text-gray-700 w-4 h-4 rounded-full items-center justify-center text-md -right-1"
                        id="contador-carrito">
                        <!-- Numero del contador carrito desactivado: hidden, activado: flex-->
                        1
                     </div>
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- open-close mobile menu -->
      <div id="mobile-menu" class="hidden sm:hidden">
         <div class="px-2 pt-2 pb-3 space-y-1">
            <a class="hover:bg-gray-200 block px-3 py-2 rounded-md text-base font-medium" href="#"
               aria-current="page">Electrodomésticos</a>
            <a class="hover:bg-gray-200 block px-3 py-2 rounded-md text-base font-medium" href="#"
               aria-current="page">Muebles</a>
            <a class="hover:bg-gray-200 block px-3 py-2 rounded-md text-base font-medium" href="#"
               aria-current="page">Ropa</a>
            <div class="relative">
               <input type="search" id="search"
                  class="bg-gray-200 shadow rounded border-0 p-3 w-full focus:outline-none focus:ring-2 x-3 py-2 my-2"
                  placeholder="Buscar" autofocus>
               <svg class="bg-gray-200 absolute inset-y-0 right-0 my-auto" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24">
                  <path
                     d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z" />
               </svg>
            </div>
         </div>
      </div>
   </nav>
   @show

   @yield('content')
   <!-- footer -->
   <!-- script -->
   <footer class="bg-gray-700 mt-auto text-sm w-full text-white">
      <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 h-1/2">
         <div class="grid grid-cols-1 sm:grid-cols-3 gap-6  justify-items-center text-center sm:text-left">
            <div class="flex flex-col gap-3 w-full">
               <h4 class="font-semibold text-base">Contáctenos</h4>
               <p class="cursor-pointer">info@lapicito.com</p>
               <div class="flex justify-center sm:justify-start">
                  <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     style="fill: white">
                     <path
                        d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z" />
                  </svg>
                  <svg class="mx-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     style="fill: white">
                     <path
                        d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z" />
                     <circle cx="11.994" cy="11.979" r="3.003" />
                  </svg>
               </div>
            </div>
            <div class="flex flex-col gap-3 w-full">
               <h4 class="font-semibold text-base">Ayuda</h4>
               <p class="cursor-pointer">Preguntas más frecuentes</p>
               <p class="cursor-pointer">Transporte</p>
               <p class="cursor-pointer">Contáctenos</p>
            </div>
            <div class="flex flex-col gap-3 w-full">
               <h4 class="font-semibold text-base">Información</h4>
               <p class="cursor-pointer">Acerca de Lapicitos Shop</p>
               <p class="cursor-pointer">Política de reembolso</p>
               <p class="cursor-pointer">Términos de Servicio</p>
            </div>
         </div>
      </div>
   </footer>
   @yield('script')
</body>

</html>