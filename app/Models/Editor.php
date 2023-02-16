<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name',
        'bloc_id',
        'size_of_bloc',
        'index_column',
        'index_row',
        'content_of_bloc'
    ];
}
