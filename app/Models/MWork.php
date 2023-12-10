<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MWork extends Model
{
    use HasFactory;

    protected $table = 'm_work';
    protected $guarded = ['m_work_id'];
}
