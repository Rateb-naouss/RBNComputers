@extends('layout')

@section('title', 'create Computer')

@section('content')
    <div class="bg-white rounded-3xl max-w-4xl mx-auto sm:px-4 lg:px-4 shadow-lg">

        <div class="flex justify-center p-3 ">
           <h1 class="text-xl font-bold">Create a new Computer</h1>
        </div>

        <div class="flex justify-center py-2 px-0">
            <form action="{{route('computers.store')}}" method="post" class="space-y-3">
                @csrf
                <div class="flex justify-between items-center">
                    <label for="computer-name" class=" font-bold">Computer name</label>
                    <input class="w-1/2 h-1 p-3 border rounded-lg focus:ring-2 focus:ring-violet-500" id="computer-name" name="computer-name" 
                            value="{{old('computer-name')}}" type="text" > 
                        @error('computer-name')
                         <div class="text-red-800">{{$message}}</div> 
                        @enderror
                </div>

                <div class="flex justify-between items-center">
                    <label for="computer-origin" class="font-bold ">Computer Origin</label>
                    <input class="w-1/2 h-1 p-3 border rounded-lg focus:ring-2 focus:ring-violet-500" id="computer-origin" name="computer-origin" value="{{old('computer-origin')}}" type="text">
                        @error('computer-origin')
                         <div class="text-red-800">{{$message}}</div> 
                        @enderror
                </div>

                <div class="flex justify-between items-center">
                    <label for="computer-price" class=" font-bold">Computer Price</label>
                    <input class="w-1/2 h-1 p-3 border rounded-lg focus:ring-2 focus:ring-violet-500" id="computer-price" name="computer-price" value="{{old('computer-price')}}" type="text">
                         @error('computer-price')
                         <div class="form-error text-red-800">{{$message}}</div> 
                        @enderror
                </div>

                <div class="flex justify-center">
                    <button  class="bg-blue-500 text-white px-3 py-1 mt-1 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>

@endsection