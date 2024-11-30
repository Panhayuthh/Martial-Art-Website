<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopItem extends Model
{
    /** @use HasFactory<\Database\Factories\ShopItemFactory> */
    use HasFactory;

    protected $fillable = [ 'name', 'description', 'price', 'categoryId', 'imageUrl' ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
