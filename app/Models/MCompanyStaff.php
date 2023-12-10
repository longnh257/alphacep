<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCompanyStaff extends Model
{
    use HasFactory;


    protected $table = 'm_company_staff';
    protected $guarded = ['m_company_staff_id'];
}
