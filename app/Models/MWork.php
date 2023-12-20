<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MWork extends Model
{
    use HasFactory;

    protected $table = 'm_work';
    protected $guarded = ['work_id'];
    protected $primaryKey = 'work_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
