<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCustomerOffice extends Model
{
    use HasFactory;

    protected $table = 'm_customer_office';
    protected $guarded = ['customer_office_id'];
    protected $primaryKey = 'customer_office_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';
}
