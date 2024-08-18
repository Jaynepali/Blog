<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'posts';

    protected $fillable = [
        'title',
        'description',
    ];


}
