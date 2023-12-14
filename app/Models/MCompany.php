<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MCompany extends Model
{
    use HasFactory;
    
    protected $table = 'm_company';
    protected $guarded = ['company_id'];
    protected $primaryKey = 'company_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';

    public function offices(): HasMany
    {
        return $this->hasMany(MCompanyOffice::class, 'company_id', 'company_id');
    }
}
