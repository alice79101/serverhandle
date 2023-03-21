<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $fillable = ['category_name'];
    protected function posts()
    {
        // 每個 category 可以有很多 posts
        return $this->hasMany(Post::class);
    }
}
