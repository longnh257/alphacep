<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectWorkTask extends Model
{
    use HasFactory;

    protected $table = 'project_work_task';
    protected $guarded = ['task_id'];
    protected $primaryKey = 'task_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
