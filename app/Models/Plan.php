<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name'];

    use HasFactory;

    public function exercises() {
        return $this->hasMany(Exercise::class);
    }
}


