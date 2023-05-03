<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    public function estados()
    {
        return $this->belongsTo(Estado::class, 'id_estados');
    }

    public function teams()
    {
        return $this->belongsTo(Team::class, 'id_teams');
    }
}
