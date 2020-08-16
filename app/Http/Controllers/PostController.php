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
        $posts = Post::orderBy('id', 'DESC')->where('firstpage', 1)->take(3)->get();
        $favorites = Post::where('favorite' ,'=', 1)->take(10)->get(); 
        $recents = Post::orderBy('id', 'DESC')->take(3)->get();

        return view('index')->with('posts', $posts)
                            ->with('recents', $recents)
                            ->with('favorites', $favorites);
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function show($id){
        $posts = Post::find($id);
        $kategoria = $posts->category;
        $recents = Post::where('category', $kategoria)->take(3)->get();

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
        $post = new Post();

        // create article
        $post = new Post([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
        ]);

        $post->category = $request->get('category');


        if (isset($request->favorite)) {
            $post->favorite = 1;
        }
        else if (isset($request->firstpage)) {
            $post->firstpage = 1; 
        }

        $image = $request->file('image');
        // prepare image
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/images'), $new_name);

        // set image with the new name
        $post->image = $new_name;


        $post->save();

        return redirect()->route('post.create');

    }



    public function getPosts($id){

        $posts = Post::orderby('id','desc')->where('firstpage', 1)->skip($id)->take(3)->get(); 
        
        // Fetch all records
        $postData['data'] = $posts;
   
        echo json_encode($postData);
        exit;
    }

    public function getCategoryPosts($id, $type){

        if($type == 1){
            $posts = Post::orderby('id','desc')->where('category', 1)->skip($id)->take(3)->get(); 

            // Fetch all records
            $postData['data'] = $posts;
            echo json_encode($postData);
            exit;

        } else if($type = 2){
            $posts = Post::orderby('id','desc')->where('category', 2)->skip($id)->take(3)->get(); 
        
            // Fetch all records
            $postData['data'] = $posts;
            echo json_encode($postData);
            exit;

        }else if($type = 3){
            $posts = Post::orderby('id','desc')->where('category', 3)->skip($id)->take(3)->get(); 
        
            // Fetch all records
            $postData['data'] = $posts;
            echo json_encode($postData);
            exit;

        } else {
            $posts = Post::orderby('id','desc')->where('category', 4)->skip($id)->take(3)->get(); 
        
            // Fetch all records
            $postData['data'] = $posts;
            echo json_encode($postData);
            exit;
        }

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
        
        $posts = Post::orderBy('id', 'DESC')->where('category', 4)->take(6)->get();
        return view('categories/pergjithshme')->with('posts', $posts);
    }
    public function keqperdorime(){
        
        $posts = Post::orderBy('id', 'DESC')->where('category', 1)->take(6)->get();
        return view('categories/keqperdorime')->with('posts', $posts);
    }
    public function korrupsioni(){
        
        $posts = Post::orderBy('id', 'DESC')->where('category', 2)->take(6)->get();
        return view('categories/korrupsioni')->with('posts', $posts);
    }
    public function partite(){
        
        $posts = Post::orderBy('id', 'DESC')->where('category', 3)->take(6)->get();
        return view('categories/partite')->with('posts', $posts);
    }
   
}
