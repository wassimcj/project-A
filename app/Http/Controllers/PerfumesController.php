<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perfumes;

class PerfumesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfume = perfumes::all();
        return view('perfumes.index')-> with('perfumes',$perfume);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfumes.create');
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

        $perfume = new perfumes;

        $perfume->name = $request->input('name');
        
        $perfume->save();
        
        return redirect ('/perfumes') -> with ('success' ,'perfume added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfume = perfumes::find($id);
        return view('perfumes.show')->with('perfume', $perfume);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfume = perfumes::find($id);
        return view('perfumes.edit')->with('perfume', $perfume);
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

        $perfume = perfumes::find($id);

        $perfume->name = $request->input('name');
        
        $perfume->save();
        
        return redirect ('/perfumes') -> with ('success' ,'perfume updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perfume = Perfumes::find($id);
        $perfume->delete();
        return redirect ('/perfumes') -> with ('success' ,'perfume removed');
    }
}
