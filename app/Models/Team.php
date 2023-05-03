<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function matches(Type $var = null)
    {
        return $this->hasMany(Match::class, 'id');
    }
}
