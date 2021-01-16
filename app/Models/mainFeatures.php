<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainFeatures extends Model
{
    public function mainFeatures()
    {
        return $this->belongsTo(mainFeatures::class);
    }
}
