<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTrainee extends Model
{
    use HasFactory;

    protected $table = 'project_trainee';
    protected $guarded = ['project_trainee_id'];
    protected $primaryKey = 'project_trainee_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
