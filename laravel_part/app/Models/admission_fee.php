<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission_fee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function organization() {
        return $this->belongsTo(Organization::class);
    }
    public function student() {
        return $this->belongsTo(student::class);
    }
    public function institute() {
        return $this->belongsTo(institute::class);
    }
    public function institute_type() {
        return $this->belongsTo(institute_type::class);
    }
}
