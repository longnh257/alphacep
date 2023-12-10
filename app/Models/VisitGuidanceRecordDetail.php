<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitGuidanceRecordDetail extends Model
{
    use HasFactory;

    protected $table = 'visit_guidance_record_detail';
    protected $guarded = ['detail_id'];
}
