<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitGuidanceRecord extends Model
{
    use HasFactory;

    protected $table = 'visit_guidance_record';
    protected $guarded = ['visit_record_id'];
    protected $primaryKey = 'visit_record_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
