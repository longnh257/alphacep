<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitGuidanceRecord extends Model
{
    use HasFactory;

    protected $table = 'visit_guidance_record';
    protected $guarded = ['visit_guidance_record_id'];
}
