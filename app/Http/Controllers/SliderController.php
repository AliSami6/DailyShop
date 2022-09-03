<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class SliderController extends Controller
{
    public function sliderList()
    {
        $sliders = Slider::all();
        return view('backend.pages.slider.index',compact('sliders'));
    }

    public function sliderStore(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required|string',
                'offer_msg' => 'required|string',
                'subtitle' => 'required|string',
                'button_text' => 'required|string',
                'button_link' => 'required|url',
                'image'=>'required|mimes:jpg,png,jpeg'
            ],
            [
                'title.required' => 'Please input title ',
                'subtitle.required' => 'Please input subtitle',
                'button_text.required' => 'Please input button text',
                'button_link.required' => 'Please input button link',
                'image.required'=>'Please input image'
            ]
        );
        $sliders = new Slider();
        $sliders->title= $request->title;
        $sliders->subtitle = $request->subtitle;
        $sliders->offer_msg = $request->offer_msg;
        $sliders->button_text = $request->button_text;
        $sliders->button_link = $request->button_link;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/images/gallery',$file);
            $sliders->image=$file;
        }
       $sliders->save();
       Toastr::success('Slider added successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function sliderEdit($id)
    {
        $EditSlider =Slider::find($id);
        // dd($EditContactBanner);
         return view('backend.pages.slider.edit',compact('EditSlider'));
    }
    public function sliderUpdate(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'title' => 'required|string',
                'offer_msg' => 'required|string',
                'subtitle' => 'required|string',
                'button_text' => 'required|string',
                'button_link' => 'required|string',
            ],
            [
                'title.required' => 'Please input title ',
                'subtitle.required' => 'Please input subtitle',
                'button_text.required' => 'Please input button text',
                'button_link.required' => 'Please input button link',
            ]
        );
        $sliders = Slider::find($id);
        $sliders->title = $request->title;
        $sliders->subtitle = $request->subtitle;
        $sliders->offer_msg= $request->offer_msg;
        $sliders->button_text = $request->button_text;
        $sliders->button_link = $request->button_link;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/images/gallery',$file);
            $sliders->image=$file;
        }
       // DB::table('sliders')->where('id', $id)->update($sliders);
       $sliders->update();
       Toastr::success('Slider updated successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function sliderDelete($id)
    {
        $sliders = Slider::find($id);
        $sliders->delete();
        Toastr::success('Slider deleted successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
