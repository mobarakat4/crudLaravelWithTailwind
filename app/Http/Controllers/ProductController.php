<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();

        return view('products.index',['cards' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('image\products'),$imageName);

        $name=$request->name;
        $description=$request->description;

        $product=new Product;
        $product->name=$name;
        $product->describtion=$description;
        $product->image=$imageName;
        $product->save();

        return back()->withSuccess('Product Created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=Product::where('id',$id)->first();
        
        return view('products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product=Product::where('id',$id)->first();
        if(isset($request->image)){
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('image\products'),$imageName);
            $product->image=$imageName;
        }

        $name=$request->name;
        $description=$request->description;

        $product->name=$name;
        $product->describtion=$description;

        $product->save();

        return back()->withSuccess('Product Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::where('id',$id)->first()->delete();
        return back();
    }
}
