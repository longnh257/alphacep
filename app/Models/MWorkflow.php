<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MWorkflow extends Model
{
    use HasFactory;

    protected $table = 'm_workflow';
    protected $guarded = ['flow_id'];
}
