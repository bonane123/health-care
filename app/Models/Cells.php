<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cells extends Model
{
    use HasFactory;
    public function sector()
    {
        return $this->belongsTo(Sectors::class, 'sector_id', 'sectorcode');
    }
}
