<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission_circular extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function organization() {
        return $this->belongsTo(organization::class);
    }
    public function institute() {
        return $this->belongsTo(institute::class);
    }
}
