<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //odniesienie do tabeli blog_articles
    protected $table = 'blog_articles';
    use HasFactory;
}
