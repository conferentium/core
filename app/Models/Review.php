<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
