<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = student::with('class_name')->get();
        return $this->sendResponse($student, 'Student list fetched successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id= $request->id;
        $data=student::where('id',$id)->get();
        return $this->sendResponse($data, 'Wish list fetched successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $student = student::find($id)->update($input);
        return $this->sendResponse($student, 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = student::find($id)->delete();
        return $this->sendResponse($student, 'Student deleted successfully!');
    }
}
