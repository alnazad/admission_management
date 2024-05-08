<?php

namespace App\Http\Controllers;
use App\Models\online_admission;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class OnlineAdmissionController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $online_admission = online_admission::with('student','student.class_name','institute','institute.institute_type','organization')->get();
        return $this->sendResponse($online_admission, 'online_admission list fetched successfully!');
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
        'institute_id' => 'required',
        "applicant_name" => 'required',
        "father_name" => 'required',
        "mother_name" => 'required',
        "class_name_id" => 'required',
        "birth_certificate_no" => 'required',
        "mobile" => 'required',
        "address" => 'required',
        "birth_date" => 'required',
        "gender" => 'required',
    ]);
    
    if ($validator->fails()) {
        return $this->sendError('Validation Error.', $validator->errors(), 422);
    }

    DB::beginTransaction();

    try {
        $student = student::create([
            'name' => $request->applicant_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'address' => $request->address,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'birth_certificate_no' => $request->birth_certificate_no,
            'class_name_id' => $request->class_name_id,
            'birth_date' => $request->birth_date,
        ]);

        $input = online_admission::create([
            'student_id' => $student->id,
            'institute_id' => $request->institute_id,
            'organization_id' => $request->organization_id
        ]);

        DB::commit();

        return $this->sendResponse($input, 'Student created successfully!');
    } catch (\Exception $e) {
        DB::rollback();
        return $this->sendError('Failed to create Online admission.', $e->getMessage(), 500);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(online_admission $online_admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(online_admission $online_admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'institute_id' => 'required',
            "applicant_name" => 'required',
            "father_name" => 'required',
            "mother_name" => 'required',
            "class_name_id" => 'required',
            "birth_certificate_no" => 'required',
            "mobile" => 'required',
            "address" => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $online_admission = online_admission::find($id)->update($input);
        return $this->sendResponse($online_admission, 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $online_admission = online_admission::find($id)->delete();
        return $this->sendResponse($online_admission, 'deleted successfully!');
    }
}
