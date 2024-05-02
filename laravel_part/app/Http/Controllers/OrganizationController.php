<?php

namespace App\Http\Controllers;

use App\Models\organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organization=Organization::orderBy('id','desc')->get();
        return $this->sendResponse($organization,'Role list fetched successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),422);
        }
        $input = $request->all();
        $organization=Organization::create($input);
        return $this->sendResponse($organization, 'Role created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $organization=Organization::find($id);
        return $this->sendResponse($organization,'Role fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),422);
        }
        $input = $request->all();
        $organization = Organization::find($id)->update($input);
        return $this->sendResponse($organization, 'Role updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organization = Organization::find($id)->delete();
        return $this->sendResponse($organization,'Role deleted successfully!');
    }
}
