@extends('layout')

@section('title', 'About')

@section('content')
    <div class="container grid grid-cols-1 md:grid-cols-2 place-items-center">
        <div>
             <img class="size-64 hover:scale-105 transition-transform" src="/images/searching.png"/>
        </div>
        <div class="   ">
            <h1 class="font-extrabold text-sm "> Welcome COCO!</h1> 
            <p> We offer the latest laptops, desktops, and custom-built PCs, along with expert advice to help you find the perfect device for your needs. </p> 
            <p>Whether you're a gamer, a professional, or just looking for reliable technology, <strong>ShehabTech</strong>  provides top-tier products and exceptional customer service. </p>
            
            <a href=" /" class="flex items-center gap-4 text-[#3A7D44] hover:text-white border-b-1 pb-1 w-fit transition-colors duration-200 "> 
             Visit us and upgrade your digital experience! 

                <img class="size-10 p-1 animate-bounce  shadow-lg hover:scale-105 transition-transform object-contain" src="/images/searching.png"/>
            </a>
        </div>   

            

            
    </div>

@endsection