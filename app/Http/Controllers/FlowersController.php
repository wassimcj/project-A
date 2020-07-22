<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flowers;

class FlowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flower = flowers::all();
        return view('flowers.index')-> with('flowers',$flower);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flowers.create');
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

        $flower = new flowers;

        $flower->name = $request->input('name');
        
        $flower->save();
        
        return redirect ('/flowers') -> with ('success' ,'flower added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flower = flowers::find($id);
        return view('flowers.show')->with('flower', $flower);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flower = flowers::find($id);
        return view('flowers.edit')->with('flower', $flower);
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

        $flower = flowers::find($id);

        $flower->name = $request->input('name');
        
        $flower->save();
        
        return redirect ('/flowers') -> with ('success' ,'flower updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flower = Flowers::find($id);
        $flower->delete();
        return redirect ('/flowers') -> with ('success' ,'flower removed');
    }
}
