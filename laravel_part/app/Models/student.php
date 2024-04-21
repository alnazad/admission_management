<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function classname(){
        return $this->belongsTo(Class_name::class);
    }
    public function sibling(){
        return $this->hasMany(Sibling::class);
    }
    public function gardian(){
        return $this->hasone(Gardian::class);
    }
}
