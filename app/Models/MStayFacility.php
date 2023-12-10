<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MStayFacility extends Model
{
    use HasFactory;

    protected $table = 'm_stay_facility';
    protected $guarded = ['m_stay_facility_id'];
}
