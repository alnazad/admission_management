<?php

namespace App\Http\Controllers;

use App\Models\institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institute=institute::orderBy('id','desc')->get();
        return $this->sendResponse($institute,'institute_type list fetched successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id= $request->id;
        $data=institute::where('institute_type_id',$id)->get();
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
    public function show(institute $institute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(institute $institute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, institute $institute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(institute $institute)
    {
        //
    }
}
