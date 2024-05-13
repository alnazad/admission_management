<?php

namespace App\Http\Controllers;

use App\Models\admission_circular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdmissionCircularController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admission_circular =admission_circular::with('organization','institute','institute.institute_type')->orderBy('id','desc')->get();
        return $this->sendResponse($admission_circular, 'admission_circular list fetched successfully!');
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
            'circular_name' => 'required',
            'circular_discription' => 'required',
            'circular_date' => 'required',
            'last_date' => 'required',
            'organization_id' => 'required',
            'institute_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $admission_circular =admission_circular::create($input);
        return $this->sendResponse($admission_circular, 'created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(admission_circular $admission_circular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admission_circular $admission_circular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admission_circular $admission_circular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admission_circular =admission_circular::find($id)->delete();
        return $this->sendResponse($admission_circular, 'deleted successfully!');
    }
}
