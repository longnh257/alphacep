<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MNationality extends Model
{
    use HasFactory;

    protected $table = 'm_nationality';
    protected $guarded = ['nationality_id'];
    protected $primaryKey = 'nationality_id';
    const CREATED_AT = 'updated_on';
    const UPDATED_AT = 'created_on';
}
