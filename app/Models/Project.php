<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $guarded = ['project_id'];
    protected $primaryKey = 'project_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
