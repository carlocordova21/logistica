@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')
   <div class="border border-solid border-gray-200 bg-white p-5 relative w-80 m-auto">
      <img class="img-producto bg-no-repeat w-full h-60 object-cover rounded-2xl cursor-pointer hover:opacity-70" src="{{ asset('img/'.$result[0]->url_img) }}"><!-- Asigno src a imagen -->
      <h3 class="nombre-producto text-center p-1 font-bold text-lg uppercase">
         {{$producto}}
      </h3>
      <h3 class="preciodescuento-producto text-center p-0">
         {{strval("hola")}}
      </h3>
      <div class="flex gap-3 items-center justify-center bg-gray-700 rounded-lg">
         <span class="text-white text-center text-lg font-bold"> OFERTA</span>
         <p class="precio-producto text-center text-xl font-bold text-white">
            {{strval("hola")}}
         </p>
      </div>
      <h3 class="text-center pt-3 font-bold text-md">Condición: </h3>
      <p class="condicion-producto text-gray-700 text-center p-0 font-bold text-md uppercase">
         {{strval("hola")}}
      </p>
      <button class="btn-carrito flex items-center justify-center w-10 h-10 absolute right-6 top-6 bg-gray-700 rounded-full transform transition duration-400 hover:scale-125 hover:bg-blue-100 border-2 border-white z-index:0">
         <svg class="pointer-events-none text-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;">
            <path class="pointer-events-none" d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z" />
            <circle class="pointer-events-none" cx="10.5" cy="19.5" r="1.5" />
            <circle class="pointer-events-none" cx="17.5" cy="19.5" r="1.5" />
         </svg>
      </button>
   </div>
@endsection