<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudySession extends Model
{
    protected $fillable = [
        'subject',
        'duration',
        'studied_at',
        'completed',
    ];
}
