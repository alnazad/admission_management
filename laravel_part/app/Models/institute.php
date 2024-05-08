<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function institute_type(){
        return $this->belongsTo(institute_type::class);
    }
    public function class_name(){
        return $this->hasMany(class_name::class);
    }
    public function assesment_tools(){
        return $this->hasMany(assesment_tool::class);
    }
    public function online_admission(){
        return $this->hasMany(online_admission::class);
    }
}
