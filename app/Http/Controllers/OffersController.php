<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function offerList()
    {
        $offers = DB::table('offers_item')->get();
        return view('backend.pages.offers.index',compact('offers'));
    }
    public function offerStore(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required|string',
                'offer' => 'required|string',
                'image'=>'required|mimes:jpg,png,jpeg'
            ],
            [
                'title.required' => 'Please input title ',
                'offer.required' => 'Please input offer',
                'image.required'=>'Please input image'
            ]
        );
        $offer = [];
        $offer['title'] = $request->title;
        $offer['offer'] = $request->offer;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/images/offer', $file);
            $offer['image']=$file;
        }
        DB::table('offers_item')->insert($offer);
        Toastr::success('offers added successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function offerEdit($id)
    {
        $EditOffer = DB::table('offers_item')->where('id', $id)->first();
        // dd($EditContactBanner);
         return view('backend.pages.offers.edit',compact('EditOffer'));
    }
    public function offerUpdate(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required|string',
                'offer' => 'required|string',
            ],
            [
                'title.required' => 'Please input title ',
                'offer.required' => 'Please input offer'
            ]
        );
        $offer = [];
        $offer['title'] = $request->title;
        $offer['offer'] = $request->offer;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/images/offer', $file);
            $offer['image']=$file;
        }

        DB::table('offers_item')->where('id', $id)->update($offer);
        Toastr::success('offers updated successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function offerDelete($id)
    {
         DB::table('offers_item')->delete($id);
         Toastr::success('offers deleted successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
