<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function institute_type(){
        return $this->belongsTo(Institute::class);
    }
    public function classname(){
        return $this->hasMany(Class_name::class);
    }
}
