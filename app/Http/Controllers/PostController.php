<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // Get first 3 posts where "firstpage" column is true (checked) 
        $posts = Post::orderBy('id', 'DESC')->where('firstpage', 1)->take(3)->get();
        // Get 10 posts where "favorite" column is true
        $favorites = Post::where('favorite' ,'=', 1)->take(10)->get();
        // Get the first 3 posts 
        $recents = Post::orderBy('id', 'DESC')->take(3)->get();

        // Return view with data
        return view('index')->with('posts', $posts)
                            ->with('recents', $recents)
                            ->with('favorites', $favorites);
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */

    public function show($id){
        // Get Post where Id is dinamic
        $posts = Post::find($id);
        $kategoria = $posts->category;

        // Get 3 posts where category is the category of the Post with the id coming from "$id"
        $recents = Post::where('category', $kategoria)->take(3)->get();

        // Return view with data
        return view('show')->with('posts', $posts)
                           ->with('recents', $recents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return create view
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new post
        $post = new Post();

        // Put the user input in the post fields
        $post->title = $request->get('title');
        $post->text = $request->get('text');
        $post->category = $request->get('category');

        // Check if the checkbox is set, if yes then save "favorite" as true
        if (isset($request->favorite)) {
            $post->favorite = 1;
        } else {
            $post->favorite = 0;
        }

        // Check if the checkbox is set, if yes then save "firstpage" as true
         if (isset($request->firstpage)) {
            $post->firstpage = 1; 
        } else{
            $post->firstpage = 0;
        }

        // Check if image has file, if yes save it
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // prepare image
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $new_name);

            // set image with the new name
            $post->image = $new_name;
        }

        // Save the data
        $post->save();

        // Redirect
        return redirect()->route('post.create');

    }



    public function getPosts($id){
        // This is used in modifications.js file for the load more button to work with ajax

        // Take 3 posts, skip as much as the $id, where "firstpage" is true. 
        $posts = Post::orderby('id','desc')->where('firstpage', 1)->skip($id)->take(3)->get(); 
        
        // Fetch all records
        $postData['data'] = $posts;
        
        // Encode it in json
        echo json_encode($postData);
        exit;
    }

    public function getCategoryPosts($id, $type){
       // This is used in modifications.js file for the load more button to work with ajax

        //Take 3 posts where category is "$type" and skip as much as "$id"    
        $posts = Post::orderby('id','desc')->where('category', $type)->skip($id)->take(3)->get(); 

        // Fetch all records
        $postData['data'] = $posts;

        // Encode it in json
        echo json_encode($postData);
        exit;

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pergjithshme(){
        // Take 6 posts where category is 4 and return view with that data
        $posts = Post::orderBy('id', 'DESC')->where('category', 4)->take(6)->get();
        return view('categories/pergjithshme')->with('posts', $posts);
    }
    public function keqperdorime(){
        // Take 6 posts where category is 1 and return view with that data
        $posts = Post::orderBy('id', 'DESC')->where('category', 1)->take(6)->get();
        return view('categories/keqperdorime')->with('posts', $posts);
    }
    public function korrupsioni(){
        // Take 6 posts where category is 2 and return view with that data
        $posts = Post::orderBy('id', 'DESC')->where('category', 2)->take(6)->get();
        return view('categories/korrupsioni')->with('posts', $posts);
    }
    public function partite(){
        // Take 6 posts where category is 3 and return view with that data
        $posts = Post::orderBy('id', 'DESC')->where('category', 3)->take(6)->get();
        return view('categories/partite')->with('posts', $posts);
    }
   
}
