<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function institute_type(){
        return $this->belongsTo(Institute_type::class);
    }
    public function classname(){
        return $this->hasMany(Class_name::class);
    }
    public function assesment_tools(){
        return $this->hasMany(assesment_tool::class);
    }
}
