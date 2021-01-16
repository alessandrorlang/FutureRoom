<?php

namespace App\Models;

use App\Models\room_lists;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_categories extends Model
{
    public function room_lists()
    {
        return $this->hasMany(room_lists::class);
    }
}
