<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTrainingFacility extends Model
{
    use HasFactory;

    protected $table = 'm_training_facility';
    protected $guarded = ['training_facility_id'];
    protected $primaryKey = 'training_facility_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
