<?php

namespace App\Http\Controllers;

use App\Models\admission_fee;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdmissionFeeController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admission_fee = admission_fee::with('student','student.class_name','institute')->get();
        return $this->sendResponse($admission_fee, 'online_admission list fetched successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id= $request->id;
        $data=student::where('id',$id)->with('class_name',)->get();
        return $this->sendResponse($data, 'Wish list fetched successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fee' => 'required',
            'student_id' => 'required',
            'institute_id' => 'required',
            'institute_type_id' => 'required',
            'organization_id' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $admission_fee =admission_fee::create($input);
        return $this->sendResponse($admission_fee, 'created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(admission_fee $admission_fee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admission_fee $admission_fee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admission_fee $admission_fee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admission_fee = admission_fee::find($id)->delete();
        return $this->sendResponse($admission_fee, 'Student deleted successfully!');
    }
}
