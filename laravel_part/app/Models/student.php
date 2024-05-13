<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function admission_fee(){
        return $this->hasOne(admission_fee::class);
    }
    public function applicant_assesment(){
        return $this->hasOne(applicant_assesment::class);
    }



    public function class_name(){
        return $this->belongsTo(class_name::class);
    }
    public function sibling(){
        return $this->belongsTo(Sibling::class);
    }
    public function gardian(){
        return $this->hasone(Gardian::class);
    }
}
