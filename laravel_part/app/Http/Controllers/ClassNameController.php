<?php

namespace App\Http\Controllers;

use App\Models\class_name;
use Illuminate\Http\Request;

class ClassNameController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $class_name=class_name::with('institute')->get();
        return $this->sendResponse($class_name,'class_name list fetched successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id= $request->id;
        $data=class_name::where('institutes_id',$id)->get();
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
    public function show(class_name $class_name)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(class_name $class_name)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, class_name $class_name)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(class_name $class_name)
    {
        //
    }
}
