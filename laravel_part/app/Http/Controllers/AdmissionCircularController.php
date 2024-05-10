<?php

namespace App\Http\Controllers;

use App\Models\admission_circular;
use Illuminate\Http\Request;
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
        if ($request->hasFile('upload_circular')) {
            $image = $request->file('upload_circular');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            return response()->json(['image_url' => '/images/'.$imageName], 200);
        };

        $input['circular_name'] = $request->circular_name;
        $input['upload_circular'] = $request->upload_circular;
        $input['circular_discription'] = $request->circular_discription;
        $input['circular_date'] = $request->circular_date;
        $input['organization_id'] = $request->organization_id;
        $input['institute_id'] = $request->institute_id;

        $path['path'] = $request->path;
        $file = $request->path;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->path->move(public_path('photos/products'), $filename);
        $products = admission_circular::create($input);
        $products->photo()->create(['path' => $filename]);
        return $this->sendResponse($products, 'Product created successfully!');
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
