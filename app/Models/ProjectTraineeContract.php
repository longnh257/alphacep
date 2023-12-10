<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTraineeContract extends Model
{
    use HasFactory;

    protected $table = 'project_trainee_contract';
    protected $guarded = ['contract_id'];
}
