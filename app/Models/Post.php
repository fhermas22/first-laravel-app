<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'category_id', 'created_at'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
