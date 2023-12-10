<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTrainee extends Model
{
    use HasFactory;

    protected $table = 'm_trainee';
    protected $guarded = ['trainee_id'];
}
