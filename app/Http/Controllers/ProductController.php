<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' =>'required|mimes:jpg,jpeg,png|max:2048'
            ]);

        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $fileName);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = '/uploads/'.$fileName;
        $product->description = $request->description;

        $product->save();
        return redirect()->route('products.index')
        ->with('success','Producto guardado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' =>'mimes:jpg,jpeg,png|max:2048'
            ]);



        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $fileName = null;
        if ($request->image) {
            $request->image->move(public_path('uploads'), $fileName);
            $fileName = time().'.'.$request->image->extension();
            $product->image = $fileName;
        }

        $product->description = $request->description;
        $product->save();
        return redirect()->route('products.index')
        ->with('success','Producto editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Producto eliminado correctamente');
    }
    public function listTenis()
    {
        $products= Product::all();
        return view('product.tenis',compact('products'));
    }
}