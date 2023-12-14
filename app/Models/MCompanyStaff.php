<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MCompanystaff extends Model
{
    use HasFactory;


    protected $table = 'm_company_staff';
    protected $guarded = ['company_staff_id'];
    
    protected $primaryKey = 'company_staff_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';

    public function office(): BelongsTo
    {
        return $this->belongsTo(MCompanyOffice::class, 'company_office_id', 'company_office_id');
    }
}
