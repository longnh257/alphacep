<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCustomer extends Model
{
    use HasFactory;

    protected $table = 'm_customer';
    protected $guarded = ['customer_id'];
    protected $primaryKey = 'customer_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';
}
