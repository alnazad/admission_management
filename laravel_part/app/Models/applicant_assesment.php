<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicant_assesment extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function institute_types() {
        return $this->belongsTo(institute_type::class);
    }
    public function assesment_tools() {
        return $this->belongsTo(assesment_tool::class);
    }
    public function student() {
        return $this->belongsTo(student::class);
    }
}
