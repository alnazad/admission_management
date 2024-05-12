<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institute_type extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function organization() {
        return $this->belongsTo(Organization::class);
    }
    public function institute(){
        return $this->hasMany(institute::class);
    }
    public function applicant_assesment(){
        return $this->hasMany(applicant_assesment::class);
    }
}
