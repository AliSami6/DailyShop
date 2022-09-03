<?php

namespace App\Http\Controllers;

use App\Models\Colors;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function colorsList()
    {
        $colors = DB::table('colors')->get();
        return view('backend.pages.colors.index',compact('colors'));
    }
    public function colorsStore(Request $request)
    {
        $this->validate(
            $request,
            [
                'color' => 'required|string',
                'favcolor' => 'required',
            ],
            [
                'color.required' => 'Please input color name',
                'favcolor.required' => 'Please input favcolor'
            ]
        );
        $colors = new Colors();
        $colors->color = $request->color;
        $colors->favcolor = $request->favcolor;
        $colors->save();
        Toastr::success('colors added successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function colorsEdit($id)
    {
        $EditColors = DB::table('colors')->where('id', $id)->first();
        // dd($EditContactBanner);
         return view('backend.pages.colors.edit',compact('EditColors'));
    }
    public function colorsUpdate(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'color' => 'required|string',
                'favcolor' => 'required',
            ],
            [
                'color.required' => 'Please input color name',
                'favcolor.required' => 'Please input favcolor'
            ]
        );
        DB::table('colors')->where('id', $id)->update([
            'color'=>$request->color,
            'favcolor'=>$request->favcolor,
        ]);
        Toastr::success('colors updated successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function colorsDelete($id)
    {
         DB::table('colors')->delete($id);
         Toastr::success('colors deleted successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
