<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MCustomerStaff extends Model
{
    use HasFactory;

    protected $table = 'm_customer_staff';
    protected $guarded = ['customer_staff_id'];

    protected $primaryKey = 'customer_staff_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';

    public function office(): BelongsTo
    {
        return $this->belongsTo(MCustomerOffice::class, 'customer_office_id', 'customer_office_id');
    }
}
