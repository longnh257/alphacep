<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSendingAgency extends Model
{
    use HasFactory;

    protected $table = 'm_sending_agency';
    protected $guarded = ['sending_agency_id'];
}
