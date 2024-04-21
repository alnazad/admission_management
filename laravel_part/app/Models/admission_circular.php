<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission_circular extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function year() {
        return $this->belongsTo(Year::class);
    }
    public function organization() {
        return $this->belongsTo(Organization::class);
    }
}
