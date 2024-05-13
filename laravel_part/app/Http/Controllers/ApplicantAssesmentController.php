<?php

namespace App\Http\Controllers;

use App\Models\applicant_assesment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplicantAssesmentController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applicant_assesment=applicant_assesment::with('student','student.class_name','assesment_tools','assesment_tools.institute','institute_types','institute_types.organization')->get();
        return $this->sendResponse($applicant_assesment, 'applicant_assesment list fetched successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $applicant_assesment=applicant_assesment::orderBy('assesment_markes','desc')->with('student','student.class_name','assesment_tools','assesment_tools.institute','institute_types','institute_types.organization')->get();
        return $this->sendResponse($applicant_assesment, 'applicant_assesment list fetched successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'assesment_markes' => 'required',
            'remarks' => 'required',
            'student_id' => 'required',
            'institute_types_id' => 'required',
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
    public function show(applicant_assesment $admission_assesment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(applicant_assesment $admission_assesment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, applicant_assesment $applicant_assesment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(applicant_assesment $applicant_assesment)
    {
        //
    }
}
