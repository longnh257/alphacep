<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectWorkTask extends Model
{
    use HasFactory;

    protected $table = 'project_work_task';
    protected $guarded = ['task_id'];
}
