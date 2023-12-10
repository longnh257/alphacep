<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCustomerOffice extends Model
{
    use HasFactory;

    protected $table = 'm_customer_office';
    protected $guarded = ['customer_office_id'];
}
