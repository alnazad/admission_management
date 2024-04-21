<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission_fee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function organization() {
        return $this->belongsTo(Organization::class);
    }
}
