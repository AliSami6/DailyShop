<?php

namespace App\Models;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories(){
        return $this->hasMany(Subcategory::class,'category_id');
    }
    public function products() {
        return $this->hasMany(Product::class, 'subcategory_id');
    }

}
