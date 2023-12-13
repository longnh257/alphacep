<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MCustomerOffice extends Model
{
    use HasFactory;

    protected $table = 'm_customer_office';
    protected $guarded = ['customer_office_id'];
    protected $primaryKey = 'customer_office_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';

    public function staffs(): HasMany
    {
        return $this->hasMany(MCustomerStaff::class, 'customer_staff_id', 'customer_staff_id');
    }
    
    public function customer(): BelongsTo
    {
        return $this->belongsTo(MCustomer::class, 'customer_id', 'customer_id');
    }
}
