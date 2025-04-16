@extends('layout')

@section('title', 'show Computer')

@section('content')
    <div class=" rounded-xl  bg-white  max-w-6xl mx-auto sm:px-6 lg:px-8 p-2 shadow-lg">

        <div class="flex justify-center p-1 ">
            <h1 class="text-red-700 font-bold">Computers</h1>
        </div>

        <div class="flex justify-center py-2 px-0">  
            <p> {{$computer['name']}} ({{$computer['origin']}}) - {{$computer['price']}}$</p> 
        </div>

        <div class="flex justify-center">
         <button class=" bg-red-700 text-white px-3 py-1 rounded-lg shadow-md hover:bg-red-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-800 transition ">Save changes</button>
        </div>
        
    </div>

@endsection
