<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class online_admission extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function student() {
        return $this->belongsTo(student::class);
    }
    public function institute() {
        return $this->belongsTo(institute::class);
    }
    public function organization() {
        return $this->belongsTo(organization::class);
    }
}
