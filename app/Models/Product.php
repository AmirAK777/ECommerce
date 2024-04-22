<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'price',
        'description',
        'details',
        'weight',
        'category_id',
        'created_at',
        'updated_at'
    ];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
