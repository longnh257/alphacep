<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MNativeLanguage extends Model
{
    use HasFactory;

    protected $table = 'm_native_language';
    protected $guarded = ['native_language_id'];
}