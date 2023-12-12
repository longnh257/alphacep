<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCustomerStaff extends Model
{
    use HasFactory;

    protected $table = 'm_customer_staff';
    protected $guarded = ['customer_staff_id'];

    protected $primaryKey = 'customer_staff_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';
}
