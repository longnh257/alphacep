<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class VisitGuidanceRecord extends Model
{
    use HasFactory;

    protected $table = 'visit_guidance_record';
    protected $guarded = ['visit_record_id'];
    protected $primaryKey = 'visit_record_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';

    public function details(): HasMany
    {
        return $this->hasMany(VisitGuidanceRecordDetail::class, 'visit_record_id', 'visit_record_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->customer_id = auth()->user()->customer_id;
            $model->created_by_id = auth()->id();
        });
        static::updating(function ($model) {
            $model->updated_by_id =  auth()->id();
            $model->updated_count += 1;
        });  
        static::addGlobalScope('customer', function (Builder $builder) {
            $user = Auth::user();

            if ($user) {
                $builder->where('customer_id', $user->customer_id);
            }
        });
    }
}
