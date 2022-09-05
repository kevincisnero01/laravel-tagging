<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;
class Post extends Model
{
    use Taggable;
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];
}
