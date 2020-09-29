<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function favorite()
    {
        // Return view with posts where favorite is true
        $posts = Post::where('favorite', 1)->get();
        return view('admin.favorite')->with('posts', $posts);
    }
    public function firstPage(){
        // Return view with posts where firsPage is true
        $posts = Post::where('firstPage', 1)->get();
        return view('admin.firstPage')->with('posts', $posts);
    }

    public function allPosts(){
        // Return view with all posts
        $posts = Post::all();
        return view('admin.allPosts')->with('posts', $posts);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find post by id to edit 
        $post = Post::find($id);
        // If post exists than return view with post data, else display error 404
        if($post){
            return view('admin.edit')->with('post', $post);
        } else{
            abort(404);
        }
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
        // Find Post by Id
        $post = Post::find($id);
        // Validate data
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        
        //Put user data into database
        $post->title = $request->get('title');
        $post->name = $request->get('name'); 
        $post->category = $request->get('category');

        // If checkbox is set put user favorite as true, else, false
        if (isset($request->favorite)) {
            $post->favorite = 1;
        } else {
            $post->favorite = 0;
        }

        // If checkbox is set, set "firstpage" as true, else false
        if (isset($request->firstpage)) {
            $post->firstpage = 1; 
        } else{
            $post->firstpage = 0;
        }

        // If image has file, save image 
        if($request->hasFile('image')){
        $image = $request->file('image');
        // prepare image
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/images'), $new_name);
        // set image with the new name
        $post->image = $new_name;
        } 

        // Save data in database
        $post->save();

        // Redirect with message
        return redirect()->route('allPosts')->with('msg', 'Posti u editua me sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete data where user has the id of "$id"
        $data = Post::find($id);
        $data->delete();

        // Return message with session and redirect
        session()->flash('msg', 'Posti u fshi me sukses!');
        return redirect()->back();
    }
}
