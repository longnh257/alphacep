<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProjectTrainee extends Model
{
    use HasFactory;

    protected $table = 'project_trainee';
    protected $guarded = ['project_trainee_id'];
    protected $primaryKey = 'project_trainee_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';

    public function contract(): HasOne
    {
        return $this->hasOne(ProjectTraineeContract::class, 'project_trainee_contract_id', 'project_trainee_contract_id')->onDelete('cascade');
    }

    public function trainee(): BelongsTo
    {
        return $this->belongsTo(MTrainee::class, 'trainee_id', 'trainee_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
