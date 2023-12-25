<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MWorkflow extends Model
{
    use HasFactory;

    protected $table = 'm_workflow';
    protected $guarded = ['flow_id'];
    protected $primaryKey = 'flow_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    
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
    }
}
