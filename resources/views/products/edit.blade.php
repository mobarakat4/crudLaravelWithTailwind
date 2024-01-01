@extends('layouts.layout')
@section('body')
    </div>
    <div class="container grid place-content-center my-5">
        <h1 class="text-5xl font-bold ">Edit Product</h1>
    </div>
    <div class="container grid place-content-center">
      @if($message=Session::get('success'))
      <span class="text-green-800 text-2xl bg-green-200 rounded-md p-2">
        {{$message}}
      </span>
        @endif
    </div>

    <div class="container mx-auto mt-8">
      <form action="{{ route('products.update', $product->id) }}" method="post" class="max-w-xl mx-auto p-6 bg-white rounded-md shadow-md" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="mb-4">
              <label for="name" class="block text-gray-600 font-semibold">Name:</label>
              <input type="text" id="name" name="name" value="{{old('name',$product->name)}}" class="mt-1 p-2 w-full border rounded-md" >
              @if($errors->has('name'))
              <span class="text-red-500">{{$errors->first('name')}}</span>
    
              @endif
          </div>
          
          
          
          <div class="mb-4">
            <label for="message" class="block text-gray-600 font-semibold">Description:</label>
            <textarea id="message" name="description" rows="4"  class="mt-1 p-2 w-full border rounded-md" >{{old('description',$product->describtion)}}</textarea>
            @if($errors->has('description'))
            <span class="text-red-500">{{$errors->first('description')}}</span>
            @endif
          </div>
          <div class="mb-4">
              <label for="name" class="block text-gray-600 font-semibold">Name:</label>
              <input type="file" id="name" name="image" class="mt-1 p-2 w-full border rounded-md" >
              @if($errors->has('image'))
              <span class="text-red-500">{{$errors->first('image')}}</span>
              @endif
          </div>

          <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
              Submit
          </button>
      </form>
  </div>
   

@endsection