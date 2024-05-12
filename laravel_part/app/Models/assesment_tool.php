<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assesment_tool extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function institute() {
        return $this->belongsTo(institute::class);
    }
    public function applicant_assesment(){
        return $this->hasMany(applicant_assesment::class);
    }
}
