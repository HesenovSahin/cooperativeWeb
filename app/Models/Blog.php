<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'cat_id',
        'is_monset',
        'status',
    ];

    
}
