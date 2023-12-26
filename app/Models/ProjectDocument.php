<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProjectDocument extends Model
{
    use HasFactory;

    protected $table = 'project_document';
    protected $guarded = ['project_document_id'];
    protected $primaryKey = 'project_document_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';

    public function document_attributes(): HasMany
    {
        return $this->hasMany(ProjectDocumentAttribute::class, 'project_document_id', 'project_document_id');
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
