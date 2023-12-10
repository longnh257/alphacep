<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCustomer extends Model
{
    use HasFactory;

    protected $table = 'm_customer';
    protected $guarded = ['m_customer_id'];
}
