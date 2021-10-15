@extends('layouts.plantilla')

@section('title', 'Lacicitos Shop')

@section('estilos')
   <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
@endsection

@section('content')
   <div id="splide" class="splide">
      <div class="splide__track">
         <ul class="splide__list">
            <li class="splide__slide">
                  <img class="bg-auto bg-no-repeat w-full" src="{{ asset('img/banners/banner1.webp') }}" alt="banner1">
            </li>
            </li>
            <li class="splide__slide">
                  <img class="bg-auto bg-no-repeat w-full" src="{{ asset('img/banners/banner2.webp') }}" alt="banner2">
            </li>
            <li class="splide__slide">
                  <img class="bg-auto bg-no-repeat w-full" src="{{ asset('img/banners/banner3.webp') }}" alt="banner3">
            </li>
            <li class="splide__slide">
                  <img class="bg-auto bg-no-repeat w-full" src="{{ asset('img/banners/banner4.webp') }}" alt="banner4">
            </li>
         </ul>
      </div>
   </div>
   <div class="bg-gray-50 text-base font-semibold 50vh">
      <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
         <div class="grid grid-cols-1 lg:grid-cols-3 sm:gap-6">
            <div class="elect">
               <h3 class="text-center p-3">Electrodomésticos</h3>
               <a href="{{ route('categoria.show', 'electrodomesticos') }}">
                  <img class="bg-no-repeat w-full h-60 object-cover rounded-2xl cursor-pointer hover:opacity-70" src="{{ asset('img/products/section-elect.jpg') }}" alt="seccion electrodomesticos">
               </a>
            </div>
            <div class="mueble">
               <h3 class="text-center p-3">Muebles</h3>
               <a href="{{ route('categoria.show', 'muebles') }}">
                  <img class="bg-no-repeat w-full h-60 object-cover rounded-2xl cursor-pointer hover:opacity-70" src="{{ asset('img/products/section-mueble.jpg') }}" alt="seccion muebles">
               </a>
            </div>
            <div class="ropa">
               <h3 class="text-center p-3">Ropa</h3>
               <a href="{{ route('categoria.show', 'ropa') }}">
                  <img class="bg-no-repeat w-full h-60 object-cover rounded-2xl cursor-pointer hover:opacity-70" src="{{ asset('img/products/section-ropa.jpg') }}" alt="seccion ropa">
               </a>
            </div>
         </div>
      </div>
   </div>
@endsection

@section('script')
   <script src="{{ asset('js/splide.min.js') }}"></script>
   <script>
      new Splide('#splide', {
         type: 'fade',
         perPage: 1,
         gap: 0,
         padding: 0,
         rewind: true,
         autoHeight: true
      }).mount();
   </script>
@endsection