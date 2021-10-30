<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Grade;

use Intervention\Image\Facades\Image;        
use Illuminate\Support\Facades\File;
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

        return view('admin.pages.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->cid = $request->cid;
        $student->address = $request->address;
        $student->gaurdian_contact = $request->gaurdian_contact;
        $student->gaurdian_name = $request->gaurdian_name;
        $student->save();
        return redirect('/admin/students');
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
        $student = Student::find($id);

        return view('admin.pages.students.create', compact('student'));
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
        $student = Student::find($id);
        $student->name = $request->name;
        $student->cid = $request->cid;
        $student->address = $request->address;
        $student->gaurdian_contact = $request->gaurdian_contact;
        $student->gaurdian_name = $request->gaurdian_name;
        $student->save();
        return redirect('/admin/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Student::where('id',$id)->delete();
        return redirect('/admin/students');
    }

    private function handleRequest($request)
    {
        
        $path = $request->file('file')->storeAs(
            'students', $request->title.".".$request->file('file')->extension(),'my-disk'
        );

        return $path;
        
    }
    public function adminHome()
    {

        $teachers = Teacher::count();
        $students = Student::count();
        $grades =  Grade::count();
        return view('admin.pages.index',compact('teachers', 'students', 'grades'));
    }

    public function who(){
        $teachers = Teacher::all();
        return view('public.pages.staffs',compact('teachers'));
    }
}
