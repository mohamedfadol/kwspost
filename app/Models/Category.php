<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function setFilsAttribute($value)
    {
        $this->attributes['files'] = json_encode($value);
    }
}
