<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chocolats;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       //$chocolat = chocolats::orderBy('id','asc')->take(1)->get();

      // $chocolat = chocolats::all();
      $chocolat = chocolats::orderBy('id','asc')->get();
        return view('chocolats.index')-> with('chocolats',$chocolat);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chocolats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name' => 'required']);

        $chocolat = new chocolats;

        $chocolat->name = $request->input('name');
        
        $chocolat->save();
        
        return redirect ('/chocolats') -> with ('success' ,'chocolat added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chocolat = chocolats::find($id);
        return view('chocolats.show')->with('chocolat', $chocolat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chocolat = chocolats::find($id);
        return view('chocolats.edit')->with('chocolat', $chocolat);
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
        $this->validate($request,['name' => 'required']);

        $chocolat = chocolats::find($id);

        $chocolat->name = $request->input('name');
        
        $chocolat->save();
        
        return redirect ('/chocolats') -> with ('success' ,'chocolat updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chocolat = Chocolats::find($id);
        $chocolat->delete();
        return redirect ('/chocolats') -> with ('success' ,'chocolat removed');
    }
}
