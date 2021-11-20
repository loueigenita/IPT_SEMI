<?php

namespace App\Http\Controllers;

use App\Student;
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
        //

        return view('pages.index');
    }


    public function StudentList()
    {
        return view('pages.student_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        return view('pages.add_students');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $student = new Student();

        $student->lastname = $request->lastname;
        $student->firstname = $request->firstname;
        $student->course = $request->course;
        $student->year = $request->year;
        $student->save();


        return redirect('add-students')->with(['success' => 'New student added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


        $student = Student::all();

        return view('pages.student_list',['student'=>$student]);

    }
}
