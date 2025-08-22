<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $products= product::all();
        return view('product-create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'product_name'=>'required|string|max:400',
            'product_description'=>'required|string|max:500',
            'image'=>'nullable|mines:jpg,jpeg,png'
        ]);

        if($request->has('image')){
            $imageName= time().'.'.$request->getClientOriginalExtension;

            $request->image->move(public_path('uploads/images/'),$imageName);

            $data['image']=$imageName;

        }

        product::create($data);
        return back()->with('success','successfully added')





    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
