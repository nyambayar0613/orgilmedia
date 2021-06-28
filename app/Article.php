<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'is_deleted',
        'article_title',
        'article_image',
        'article_description'
    ];
}
