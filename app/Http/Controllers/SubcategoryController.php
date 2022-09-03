<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function subCatList()
    {
        $subcategories = Subcategory::all();
        $cat = Category::all();
        return view('backend.pages.subcategory.index',compact('subcategories','cat'));
    }
    public function subCatStore(Request $request)
    {
        $this->validate(
            $request,
            [
                'category_id' => 'required',
                'subcategory_name' => 'required|string',
                'slug' => 'required|string|max:200',
            ],
            [
                'category_id.required' => 'Please input category_id ',
                'subcategory_name.required' => 'Please input subcategory name',
                'slug.required' => 'Please input slug '
            ]
        );
        Subcategory::Create([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'slug' => $request->slug,
            'created_at' => now()
        ]);
        Toastr::success(' subcategory added successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function subCatEdit($id)
    {
        $Editsub =Subcategory::find($id);
        $editcat = Category::all();
        // dd($EditContactBanner);
         return view('backend.pages.subcategory.edit',compact('Editsub','editcat'));
    }
    public function  subCatUpdate(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'category_id' => 'required',
                'subcategory_name' => 'required|string',
                'slug' => 'required|string|max:200',
            ],
            [
                'category_id.required' => 'Please input category_id ',
                'subcategory_name.required' => 'Please input subcategory name',
                'slug.required' => 'Please input slug '
            ]
        );
        $subcategories = Subcategory::find($id);
        $subcategories->category_id = $request->category_id;
        $subcategories->subcategory_name = $request->subcategory_name;
        $subcategories->slug = $request->slug;
        $subcategories->update();
        Toastr::success(' subcategory updated successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function subCatDelete($id)
    {
        $subcategories = Subcategory::find($id);
        $subcategories->delete();
        Toastr::success('subcategory deleted successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
