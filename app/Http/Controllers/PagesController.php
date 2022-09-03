<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function getAllData(){
        $slider = Slider::orderBy('id', 'ASC')->get();
        $offerOne = DB::table('offers_item')->first();
        $offers = DB::table('offers_item')->where('id', '>', 1)->get();
       // dd($offers);
       return view('frontend.pages.index',compact('slider','offerOne','offers'));
    }

}
