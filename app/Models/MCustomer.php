<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MCustomer extends Model
{
    use HasFactory;

    protected $table = 'm_customer';
    protected $guarded = ['customer_id'];
    protected $primaryKey = 'customer_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';

    public function offices(): HasMany
    {
        return $this->hasMany(MCustomerOffice::class, 'customer_id', 'customer_id');
    }
}
