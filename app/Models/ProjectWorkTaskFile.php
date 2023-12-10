<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectWorkTaskFile extends Model
{
    use HasFactory;

    protected $table = 'project_work_task_file';
    protected $guarded = ['task_file_id'];
}
