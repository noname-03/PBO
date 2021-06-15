<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Photo;

class TestController extends Controller
{
    public function index()
    {
        return view('student.backup');
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);
        // /* Store $imageName name in DATABASE from HERE */
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName);
    }
    public function store(Request $request)
    {
        $name = $request->file('name')->getClientOriginalName();
        $request->name->move(public_path('images'), $name);
        // $request->file('name')->storeAs('public/images/', $name);
        $photo = new Photo();
        $photo->name = $name;
        $photo->save();
        return redirect()->back();
        // dd($request->file());
    }
}
