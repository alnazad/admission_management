<?php

namespace App\Http\Controllers;

use App\Models\assesment_tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssesmentToolController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assesment_tool=assesment_tool::with('institute')->get();
        return $this->sendResponse($assesment_tool,'institute_type list fetched successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id= $request->id;
        $data=assesment_tool::where('institute_id',$id)->get();
        return $this->sendResponse($data, 'Wish list fetched successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'institute_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $assesment_tool = assesment_tool::create($input);
        return $this->sendResponse($assesment_tool, 'created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(assesment_tool $assesment_tool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(assesment_tool $assesment_tool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $assesment_tool = assesment_tool::find($id)->update($input);
        return $this->sendResponse($assesment_tool, 'updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $assesment_tool = assesment_tool::find($id)->delete();
        return $this->sendResponse($assesment_tool, 'deleted successfully!');
    }
}
