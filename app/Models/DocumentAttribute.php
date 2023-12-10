<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentAttribute extends Model
{
    use HasFactory;

    protected $table = 'document_attribute';
    protected $guarded = ['document_attribute_id'];
}
