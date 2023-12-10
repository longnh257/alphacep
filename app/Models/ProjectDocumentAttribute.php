<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDocumentAttribute extends Model
{
    use HasFactory;

    protected $table = 'project_document_attribute';
    protected $guarded = ['project_document_attribute_id'];
}
