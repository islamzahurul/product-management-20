@extends('layouts.app')  

@section('content')  

<div class="container mx-auto p-6">  
    <div class="bg-white shadow-md rounded-lg p-5 flex">  
        <div class="w-1/2">  
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">   
        </div> 
         
        <div class="w-1/2 pl-6">  
            <h1 class="text-2xl font-bold mb-2">Product Name : {{ $product->name }}</h1>  
            <p class=" font-bold mb-2">Product Description : {{ $product->description }}</p>  
            <div class="flex items-center">   
                <span class="text-green-500 text-xl font-semibold">Price : {{ $product->price }}</span>  
            </div>  
            
            <div class="mt-4 text-gray-600">  
                 <p class="font-semibold" >Stock : {{ $product->stock }}</p>
                 <a class="text-blue-500 text-xl font-semibold" href="{{ route('products.index') }}">Back to Products</a>
            </div> 
        </div>  
    </div>  
</div>  
    
@endsection