<?php

namespace App\Http\Controllers;

use App\Models\institute_type;
use Illuminate\Http\Request;
class InstituteTypeController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institute_type=institute_type::orderBy('id','desc')->get();
        return $this->sendResponse($institute_type,'institute_type list fetched successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id= $request->id;
        $data=institute_type::where('organization_id',$id)->get();

        
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
    public function show(institute_type $institute_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(institute_type $institute_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, institute_type $institute_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(institute_type $institute_type)
    {
        //
    }
}
