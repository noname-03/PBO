<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
        // dd($student);
        // return view('student.data', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1

        $name = $request->file('photo')->getClientOriginalName(); // photo = name dari form
        $request->photo->move(public_path('images'), $name); // photo = name dari form

        // dd($request->all());

        $request['namephoto'] = $name;

        // dd($request->except('photo'));

        Student::create($request->except('photo'));
        return redirect()->route('student.index');

        // 2

        // $photo = new Student();
        // $photo->name = $name;
        // $student = $request->all();
        // $photo->save();
        // dd($student, $photo);
        // Student::create($student, $photo->name = $name);

        // 3

        // $name = $request->file('namephoto')->getClientOriginalName();
        // $request->namephoto->move(public_path('images'), $name);
        // Student::create([
        //     'name'=> $request->name,
        //     'class'=> $request->class,
        //     'phone'=> $request->phone,
        //     'address'=> $request->address,
        //     'namephoto'=> $name
        // ]);
        // return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // dd($student);
        // $student = Student::find($student);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $students = Student::find($student);

        return view('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // $data = $request->all();
        // $students = Student::find($student);
        // $students->update($data);
        // $request->validate([

        // ]);
        // $data = $request->all();
        // $post = Student::find($student);
        // $student->update($request->all());

        // return redirect()->route('student.index');
        $name = $request->file('namephoto')->getClientOriginalName();
        $request->namephoto->move(public_path('images'), $name);
        $student->update([
            'name'=> $request->name,
            'class'=> $request->class,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'namephoto'=> $name
        ]);
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
