
@extends('layouts.layout')
@section('body')

    </div>
    <div class="flex justify-end p-4">

      <a href="/create " class="mr-3 p-1 text-white bg-sky-500 rounded-lg ">
        <i class="fas fa-plus mx-1"></i><span>New Product</span></a>
    </div>

    <div>
      <div class="container my-4 border-b-2 border-red-200 pb-3">
        <h1 class="text-4xl">Products</h1>
      </div>

      <div class="container mx-auto p-4">
        <div class="flex flex-wrap -mx-4">
            @foreach($cards as $card)
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="image/products/{{ $card['image'] }}" alt="{{ $card['name'] }}" class="w-full h-48 object-cover scaleimage">
                            <div class="flex flex-row justify-between">
                              <div class="p-4 flex flex-col">
                                  <h3 class="text-xl font-semibold mb-2">{{ $card['name'] }}</h3>
                                  <p class="text-gray-700 overflow-hidden" style="height: 25px;">{{ $card['describtion'] }}</p>
                              </div>
                              <div class="my-auto flex flex-col mr-2">
                                <a href="products/{{$card['id']}}/edit" class="bg-blue-500 rounded-xl text-white px-2 py-1 my-1">Edit</a>
                                <form action="products/{{$card['id']}}/delete" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="bg-red-500 rounded-xl text-white px-1 py-1 my-1">Delete</button>
                                </form>


                              </div>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    </div>
    
    
@endsection