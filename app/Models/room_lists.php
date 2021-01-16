<?php

namespace App\Models;

use App\Models\room_categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_lists extends Model
{

    use HasFactory;

    public function room_categories()
    {
        return $this->belongsTo(room_categories::class, 'room_categoryID');
    }
}
