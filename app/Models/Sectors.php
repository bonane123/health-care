<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectors extends Model
{
    use HasFactory;

    public function districts()
    {
        return $this->belongsTo(Districts::class, 'district_id', 'districtcode');
    }
}
