@extends('layout')

@section('title', 'Edit Computer')

@section('content')
    <div class="bg-white rounded-3xl max-w-4xl mx-auto sm:px-3 lg:px-4 p-2 shadow-lg"> 

        <div class="flex justify-center p-1">
            <h1 class="text-xl font-bold">Edit an old Computer</h1>
        </div>

        <div class="flex justify-center py-2 px-0">
            <form action="{{route('computers.update', ['computer'=>$computer->id])}}" method="post" class="space-y-2">
                @csrf
                @method('put')
                <div class="flex justify-between items-center py-2">
                    <label for="computer-name" class=" font-bold">Computer name</label>
                    <input id="computer-name" class="w-1/2 h-1 p-3 border rounded-lg" name="computer-name" 
                                       value="{{$computer->name}}" type="text" >
                        @error('computer-name')
                         <div class="form-error">{{$message}}</div> 
                        @enderror
                </div>

                <div class="flex justify-between items-center py-2">
                    <label for="computer-origin" class=" font-bold">Computer Origin</label>
                    <input id="computer-origin" class="w-1/2 h-1 p-3 border rounded-lg" name="computer-origin" value="{{$computer->origin}}" type="text">
                        @error('computer-origin')
                         <div class="form-error">{{$message}}</div> 
                        @enderror
                </div>

                <div class="flex justify-between items-center py-2">
                    <label for="computer-price" class=" font-bold">Computer Price</label>
                      <input id="computer-price" class="w-1/2 h-1 p-3 border rounded-lg" name="computer-price" value="{{$computer->price}}" type="text">
                         @error('computer-price')
                         <div class="form-error">{{$message}} </div> 
                         @enderror
                </div>

                <div class="flex justify-center">
                    <button class="bg-red-700 text-white px-3 py-1 rounded-lg shadow-md hover:bg-red-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-800 transition" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>

@endsection