<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaptionBonus extends Model
{
    use HasFactory;

    protected $fillable = [
        'captain_id',
        'bout',
        'status',
    ];

    public function captain()
    {
        return $this->belongsTo(Captain::class, 'captain_id');
    }
}
