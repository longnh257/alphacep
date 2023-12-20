<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTraineeContract extends Model
{
    use HasFactory;

    protected $table = 'project_trainee_contract';
    protected $guarded = ['contract_id'];
    protected $primaryKey = 'contract_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
