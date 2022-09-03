<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Addproduct(Request $request)
    {
        $this->validate(
            $request,
            [
                'category_id ' => 'required',
                'subcategory_id ' => 'required',
                'name' => 'required|string',
                'slug' => 'required|string',
                'short_desc'=>'required|string',
                'desc'=>'required|string',
                'quantity'=>'required',
                'price'=>'required',
                'size'=>'required|string',
                'status'=>'required|string',
                'offer_price'=>'required'
            ],
            [
                'category_id.required' => 'Please input details ',
                'subcategory_id.required' => 'Please input name',
                'designation.required' => 'Please input designation ',
                'located.required' => 'Please input located',
                'image.required'=>'Please input image'
            ]
        );

    }
}
