<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTraineeRelative extends Model
{
    use HasFactory;

    protected $table = 'm_trainee_relative';
    protected $guarded = ['relative_id'];
}
