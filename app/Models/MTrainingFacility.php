<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTrainingFacility extends Model
{
    use HasFactory;

    protected $table = 'm_training_facility';
    protected $guarded = ['m_training_facility_id'];
}
