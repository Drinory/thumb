<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return view with all Team data
        $members = Team::all();
        return view('team')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return view for creating team
        return view('admin.teamcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Validate user input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'role' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        

        // Create team 
        $post = new Team([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'role' => $request->get('role'),
            'facebook' => $request->get('facebook'),
            'instagram' => $request->get('instagram'),
        ]);
        // Image Save 
        if($request->hasFile('image')){
            $image = $request->file('image');
            // prepare image
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $new_name);
            $post->image = $new_name;
            
        }

        // Save data
        $post->save();

        // Return redirect
        return redirect()->route('team.create');

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
}
