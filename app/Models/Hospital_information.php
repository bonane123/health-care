<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital_information extends Model
{
    use HasFactory;
        public function province()
    {
        return $this->belongsTo(Provinces::class, 'province_id', 'provincecode');
    }
    public function district()
    {
        return $this->belongsTo(Districts::class, 'district_id', 'districtcode');
    }
    public function sector()
    {
        return $this->belongsTo(Sectors::class, 'sector_id', 'sectorcode');
    }
    public function cell()
    {
        return $this->belongsTo(Cells::class, 'cell_id', 'cellcode');
    }
    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id', 'id');
    }
}
