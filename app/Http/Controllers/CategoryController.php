<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class CategoryController extends Controller
{
    public function categoryList()
    {
        $categories = Category::all();
        return view('backend.pages.category.index',compact('categories'));
    }

    public function categoryStore(Request $request)
    {
        $this->validate(
            $request,
            [
                'category_name' => 'required|string',
                'description' => 'required|max:350',
            ],
            [
                'category_name.required' => ' category name is required',
                'description.required' => 'description is required',
            ]
        );

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->description = $request->description;
        $category->save();
        Toastr::success('category added successfully', 'success', ["positionClass" => "toast-top-right"]);
       return redirect()->back();
    }

    public function categoryEdit($id)
    {
        $EditCategory = Category::find($id);
        return view('backend.pages.category.edit',compact('EditCategory'));
    }
    public function categoryUpdate(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'category_name' => 'required|string',
                'description' => 'required',
            ],
            [
                'category_name.required' => 'category name is required',
                'description.required' => 'description is required'
            ]
        );
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->description= $request->description;
        $category->update();
        Toastr::success('category updated successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function categoryDelete($id)
    {
        $category = Category::find($id);
        $category->delete();
        Toastr::success('category deleted successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}
