<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exercise extends Model {
    protected $fillable = ['plan_id', 'name', 'description', 'sets', 'repetitions', 'video_path'];
    use HasFactory;

    public function plan(): BelongsTo {
        return $this->belongsTo(Plan::class);
    }
}
