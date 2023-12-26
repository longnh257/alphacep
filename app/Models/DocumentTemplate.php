<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DocumentTemplate extends Model
{
    use HasFactory;

    protected $table = 'document_template';
    protected $guarded = ['document_template_id'];
    protected $primaryKey = 'document_template_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';


    public function document_attributes(): HasMany
    {
        return $this->hasMany(DocumentAttribute::class, 'document_template_id', 'document_template_id');
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
        static::deleting(function ($model) {
            $model->document_attributes()->delete();
        });
    }
}
