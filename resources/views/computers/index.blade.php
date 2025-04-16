@extends('layout')

@section('title', 'computers')

@section('content')
        <div class="bg-white rounded-3xl max-w-4xl  sm:px-4 lg:px-4 p-3 shadow-lg">
            
            <div class="text-xl flex justify-center"> 
                 <h1 class="text-xl font-bold"> Computers </h1>
            </div>

            <div class="flex justify-center py-2 px-0"> 
             @if(count($computers)>0)   
            <ul>
                @foreach($computers as $computer)
               <li class="flex justify-between items-center py-2">
                 <a href= "{{ route('computers.show', ['computer' => $computer['id']]) }}"  > 
                   <strong> {{$computer['name']}} </strong> ({{$computer['origin']}}) {{$computer['price']}}$  
                        
                        <div class="flex space-x-2">
                        <a class="edit-btn  px-2 py-1 rounded-lg bg-sky-600 hover:bg-sky-500 hover:shadow-xl text-white" href="{{route('computers.edit', $computer->id)}}">edit </a>
                    
                        <form action="{{route('computers.destroy', $computer->id)}}"  method="post">
                            @csrf
                            @method('delete')
                            <input class="delete-btn px-2 py-1 rounded-lg shadow-lg  bg-red-700 hover:bg-red-600 hover:shadow-xl text-white" type="submit" value="delete"> 
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
            @else <p> There are no computers to display </p>
            @endif
            </div>
        </div>

@endsection
