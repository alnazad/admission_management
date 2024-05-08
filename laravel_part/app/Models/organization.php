<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function admission_circular() {
        return $this->hasMany(admission_circular::class);
    }
    public function institute_type() {
        return $this->hasMany(institute_type::class);
    }
    public function admission_fee() {
        return $this->hasMany(admission_fee::class);
    }
    public function applicant_assesment() {
        return $this->hasMany(applicant_assesment::class);
    }
    public function online_admission() {
        return $this->hasMany(online_admission::class);
    }
}
