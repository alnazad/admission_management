<?php

namespace App\Http\Controllers;
use App\Models\online_admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OnlineAdmissionController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $online_admission = online_admission::with('organization')->get();
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
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $online_admission = online_admission::create($input);
        return $this->sendResponse($online_admission, 'User created successfully!');
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
