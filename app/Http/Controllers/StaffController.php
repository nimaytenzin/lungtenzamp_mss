<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Intervention\Image\Facades\Image;        
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Teacher::all();

        return view('admin.pages.staffs.index', compact('staffs'));
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
        $staff = new Teacher();
        $staff->name = $request->name;
        $staff->contact = $request->contact;
        $staff->address = $request->address;
        $staff->role = $request->role;
        $staff->faculty = $request->faculty;
        $staff->subjects_taught = $request->subjects_taught;
        $staff->profile_uri = $this->handleRequest($request);

        $staff->save();
        return redirect('/admin/staffs');
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
        $staff = Teacher::find($id);
        return view('admin.pages.staffs.edit', compact('staff'));
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
        $staff = Teacher::find($id);
        $staff->name = $request->name;
        $staff->contact = $request->contact;
        $staff->address = $request->address;
        $staff->role = $request->role;
        $staff->faculty = $request->faculty;
        $staff->subjects_taught = $request->subjects_taught;
        if( $request->hasFile('file')){
            $staff->profile_uri = $this->handleRequest($request);
        }
        return redirect('/admin/staffs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Teacher::where('id',$id)->delete();
        return redirect('/admin/students');
    }

    private function handleRequest($request)
    {
        
        $path = $request->file('file')->storeAs(
            'teachers', $request->name.".".$request->file('file')->extension(),'my-disk'
        );

        return $path;
        
    }
}
