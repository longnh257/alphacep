<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCompanyOffice extends Model
{
    use HasFactory;

    protected $table = 'm_company_office';
    protected $guarded = ['company_office_id'];
}
