<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MTrainee extends Model
{
    use HasFactory;

    protected $table = 'm_trainee';
    protected $guarded = ['trainee_id'];
    protected $primaryKey = 'trainee_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';

    public function project_trainee(): HasOne
    {
        return $this->hasOne(ProjectTrainee::class, 'project_trainee_id', 'project_trainee_id')->onDelete('cascade');
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
        });
    }
}
