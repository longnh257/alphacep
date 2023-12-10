<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCompany extends Model
{
    use HasFactory;
    
    protected $table = 'm_company';
    protected $guarded = ['company_id'];
}
