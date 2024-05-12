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
            'circular_name' => 'required',
            'upload_circular' => 'required',
            'circular_discription' => 'required',
            'circular_date' => 'required',
            'organization_id' => 'required',
            'institute_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $path = 'public/files' . $fileName;
            Storage::disk('local')->put($path, file_get_contents($file));

            $input['circular_name'] = $request->circular_name;
            $input['upload_circular'] = $request->upload_circular;
            $input['circular_discription'] = $request->circular_discription;
            $input['circular_date'] = $request->circular_date;
            $input['organization_id'] = $request->organization_id;
            $input['institute_id'] = $request->institute_id;

            return response()->json('uploaded Successfull');
        }
        return response()->json('File not found');
    }
    public function remove(Request $request){
        $file='public/files/'.$request->name;
        Storage::delete($file);
        return response()->json('delete Successfully');
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
    public function destroy(admission_circular $admission_circular)
    {
        //
    }
}
