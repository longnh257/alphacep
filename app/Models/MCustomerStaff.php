<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCustomerStaff extends Model
{
    use HasFactory;

    protected $table = 'm_customer_staff';
    protected $guarded = ['m_customer_staff_id'];
}
