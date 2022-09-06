<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Offers;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function getAllData(){
        $slider = Slider::orderBy('id', 'ASC')->get();
        $offerOne = DB::table('offers_item')->first();
        $offers = DB::table('offers_item')->where('id', '>', 1)->get();
        $test = Testimonial::all();
        $news = News::all();
       // dd($offers);
       return view('frontend.pages.index',compact('slider','offerOne','offers','test','news'));
    }

    function NewsLetter(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email',
            ],
            [
                'email.required' => 'email is required'
            ]
        );
        $subscribe = new News();
        $subscribe->email = $request->email;
        $subscribe->save();
        Toastr::success('email sent successfully', 'success', ["positionClass" => "toast-bottom-right"]);
        return redirect()->back();
    }

}
