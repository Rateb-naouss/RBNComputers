@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="max-w-6xl mx-auto sm:px- lg:px-8">

    <section class=" bg-[#0097a7] text-white rounded-2xl shadow-2xl max-w-full p-3 m-10">
        <div class="container">
           <a href="/ ">
            <img 
              class=" w-20 h-18 p-1 bg-amber-50 object-contain rounded-2xl shadow-2xl hover:scale-105 transition-transform"
              src="/images/deal.png" />
           </a>

           <div class="relative flex items-center p-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-5 h-5 top-8 left-8 text-slate-600">
                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                </svg>
                <input
                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                placeholder="UI Kits, Dashboards..." 
                />
                <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                type="button"> Search </button> 
            </div>
            
         <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
            <div class="flex items-center gap-6 w-70 max-w-full">
                <img class="w-12 object-contain" 
                     src="/images/done1.png" 
                />
                <p class="items-start font-normal text-sm tracking-0.8">
                    We're excited to help you achieving your goals. Whether you have a question, an idea, or you're ready to get started, we’re here to listen. 
                </p>     
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-4  ">
                <a class= "p-2 hover:underline" href="{{ route('home.index') }}">Home</a>
                <a class= "p-2 hover:underline" href="{{ route('home.about') }}"> About</a>
                <a class= "p-2 hover:underline" href="{{ route('computers.index') }}"> Computers</a>
                <a class= "p-2 hover:underline" href="{{ route('computers.create') }}"> Create</a>
            </div>
         </div>
        </div>
    </section>
</div>

@endsection
