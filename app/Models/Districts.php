<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    public function division()
    {
      return $this->belongsTo(Division::class);
    }
}
