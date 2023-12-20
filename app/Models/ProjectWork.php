<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectWork extends Model
{
    use HasFactory;

    protected $table = 'project_work';
    protected $guarded = ['project_work_id'];
    protected $primaryKey = 'project_work_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
