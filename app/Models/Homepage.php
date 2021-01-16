<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    public function homepage()
    {
        return $this->belongsTo(Homepage::class);
    }
}
