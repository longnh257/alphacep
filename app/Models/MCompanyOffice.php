<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MCompanyOffice extends Model
{
    use HasFactory;

    protected $table = 'm_company_office';
    protected $guarded = ['company_office_id'];
    protected $primaryKey = 'company_office_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';

    public function staffs(): HasMany
    {
        return $this->hasMany(MCompanystaff::class, 'company_staff_id', 'company_staff_id');
    }
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(MCompany::class, 'company_id', 'company_id');
    }
}
