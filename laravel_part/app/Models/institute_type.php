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
    public function institution(){
        return $this->hasMany(Institute::class);
    }
}
