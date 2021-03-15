<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mahasiswa = DB::table('students')->get();
        $students = Student::all();
        return view('students/index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nrp' => 'required',
            'email' => 'required|email:rfc,dns',
            'jurusan' => 'required',
        ]);
        $student = new Student;
        $student->nama = $request->name;
        $student->nrp = $request->nrp;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;
        
        $student->save();
        return redirect('/students')->with('status','New Student Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
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
        $request->validate([
            'name' => 'required',
            'nrp' => 'required',
            'email' => 'required|email:rfc,dns',
            'jurusan' => 'required',
        ]);

        $student = \App\Models\student::find($id);
        
        $student->nama = $request->name;
        $student->nrp = $request->nrp;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;

        $student->save();
        return redirect('/students')->with('status','Student Successfully edited');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = \App\Models\Student::find($id);

        $student->delete();
        return redirect('/students')->with('status','Student has been deleted');

    }
}
