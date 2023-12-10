<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MWorkingHour extends Model
{
    use HasFactory;

    protected $table = 'm_working_hour';
    protected $guarded = ['m_working_hour_id'];
}
