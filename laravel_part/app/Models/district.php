<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function area() {
        return $this->belongsTo(Area::class);
    }
    public function division() {
        return $this->belongsTo(Division::class);
    }
}
