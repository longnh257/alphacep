<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MNativeLanguage extends Model
{
    use HasFactory;

    protected $table = 'm_native_language';
    protected $guarded = ['native_language_id'];
    protected $primaryKey = 'native_language_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
}
