<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectTraineeContract extends Model
{
    use HasFactory;

    protected $table = 'project_trainee_contract';
    protected $guarded = ['contract_id'];
    protected $primaryKey = 'contract_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    
    public function project_trainee(): BelongsTo
    {
        return $this->belongsTo(ProjectTrainee::class, 'project_trainee_id', 'project_trainee_id');
    }
}
