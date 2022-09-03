<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = [
        'category_id',
        'subcategory_name',
        'slug',
    ];
    public function categories() {
        return $this->belongsTo('Category');
    }

}
