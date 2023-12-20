<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSendingAgency extends Model
{
    use HasFactory;

    protected $table = 'm_sending_agency';
    protected $guarded = ['sending_agency_id'];
    protected $primaryKey = 'sending_agency_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
