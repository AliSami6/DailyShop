<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images()
    {
      return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
    public function products() {
        return $this->hasManyThrough(Category::class, Subcategory::class,'category_id','subcategory_id','id','id');
    }

}
