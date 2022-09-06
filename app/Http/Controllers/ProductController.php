<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ViewAddProduct()
    {
        $cat = new Category();
        return view('backend.pages.products.addProduct',compact('cat'));
    }
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
                'quantity'=>'required|numeric',
                'price'=>'required|numeric',
                'size'=>'required|string',
                'offer_price'=>'required|numeric'
            ],
            [
                'category_id.required' => 'category id is required',
                'subcategory_id.required' => 'subcategory_id is required',
                'name.required' => ' name is required',
                'slug.required' => ' slug is required',
                'short_desc.required'=>'short_desc is required',
                'desc.required'=>'desc is required',
                'quantity.required'=>'quantity is required',
                'price.required'=>'price is required',
                'size.required'=>'size is required',
                'offer_price.required'=>'offer_price is required'
            ]
        );
        $products = new Product();
        $products->category_id = $request->category_id;
        $products->subcategory_id = $request->subcategory_id;
        $products->name = $request->name;
        $products->slug = $request->slug;
        $products->short_desc = $request->short_desc;
        $products->desc = $request->desc;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->size = $request->size;
        $products->offer_price = $request->offer_price;
        $products->save();
        return redirect()->back();
    }
}
