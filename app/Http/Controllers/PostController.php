<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
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
        $posts= Post::all();
        return view('post-create',compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data= $request->validate([
        'title'=>'required|max:400|string',
        'image'=>'nullable|mimes:png,jpg,jpeg|max:1024',
        'description'=>'required|string|max:200'

        ]);

        if($request->has('image')){
            $imageName= time().'.'.$request->image->getClientOriginalExtension();

                //uploading img to the server
            $request->image->move(public_path('uploads/images/'), $imageName);

            $data['image']=$imageName;
        }

        post::create($data);
        return back()->with('success','Post created');

    }

   
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post-edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data= $request->validate([
            'title'=>'required|max:400|string',
        'image'=>'sometimes|mimes:png,jpg,jpeg|max:1024',
        'description'=>'required|string|max:200'

        ]);

        if($request->has('image')){

            //check oldimg
            $destination= 'uploads/images/'.$post->image;

            //remove old image

            if(\File::exists($destination)){
                \File::Delete($destination);
            }

            //add new image
            $imageName= time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/',$imageName));

            $data['image']= $imageName;
        }

        $post->update($data);
        return redirect()->route('post-create')->with('post updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
