<?php

namespace App\Http\Controllers;

use App\Models\Lectur;
use Illuminate\Http\Request;

class LecturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturs = Lectur::all();
        return view('lectur.index', compact('lecturs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lectur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->file('photo')->getClientOriginalName(); // photo = name dari form
        $request->photo->move(public_path('images'), $name); // photo = name dari form
        $request['namephoto'] = $name;
        Lectur::create($request->except('photo'));
        return redirect()->route('lectur.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lectur  $lectur
     * @return \Illuminate\Http\Response
     */
    public function show(Lectur $lectur)
    {
        return view('lectur.show', compact('lectur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lectur  $lectur
     * @return \Illuminate\Http\Response
     */
    public function edit(Lectur $lectur)
    {
        $lecturs = Lectur::find($lectur);

        return view('lectur.edit', compact('lecturs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lectur  $lectur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lectur $lectur)
    {
        $name = $request->file('photo')->getClientOriginalName(); // photo = name dari form
        $request->photo->move(public_path('images'), $name); // photo = name dari form
        $request['namephoto'] = $name;
        $lectur->update($request->except('photo'));
        return redirect()->route('lectur.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lectur  $lectur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lectur $lectur)
    {
        $lectur->delete();
        return redirect()->route('lectur.index');
    }
}
