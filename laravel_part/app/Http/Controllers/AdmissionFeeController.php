<?php

namespace App\Http\Controllers;

use App\Models\admission_fee;
use Illuminate\Http\Request;

class AdmissionFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'fee' => 'required',
            'student_id' => 'required',
            'institute_id' => 'required',
            'assesment_tools_id' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $applicant_assesment =applicant_assesment::create($input);
        return $this->sendResponse($applicant_assesment, 'created successfully!');
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
    public function destroy(admission_fee $admission_fee)
    {
        //
    }
}
