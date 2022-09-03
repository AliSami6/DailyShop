<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonialList()
    {
        $testimonial = Testimonial::all();
        return view('backend.pages.testimonial.index',compact('testimonial'));
    }

    public function testimonialStore(Request $request)
    {
        $this->validate(
            $request,
            [
                'details' => 'required|string',
                'name' => 'required|string',
                'designation' => 'required|string',
                'located' => 'required|string',
                'image'=>'required|mimes:jpg,png,jpeg'
            ],
            [
                'details.required' => 'Please input details ',
                'name.required' => 'Please input name',
                'designation.required' => 'Please input designation ',
                'located.required' => 'Please input located',
                'image.required'=>'Please input image'
            ]
        );
        $test = new Testimonial();
        $test->details= $request->details;
        $test->name = $request->name;
        $test->designation = $request->designation;
        $test->located = $request->located;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/images/test',$file);
            $test->image=$file;
        }
       $test->save();
       Toastr::success('data added successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function TestimonialEdit($id)
    {
        $EditTestimonial =Testimonial::find($id);
        // dd($EditContactBanner);
         return view('backend.pages.testimonial.edit',compact('EditTestimonial'));
    }
    public function testimonialUpdate(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'details' => 'required|string',
                'name' => 'required|string',
                'designation' => 'required|string',
                'located' => 'required|string',
                'image'=>'required|mimes:jpg,png,jpeg'
            ],
            [
                'details.required' => 'Please input details ',
                'name.required' => 'Please input name',
                'designation.required' => 'Please input designation ',
                'located.required' => 'Please input located',
                'image.required'=>'Please input image'
            ]
        );
        $editTest = Testimonial::find($id);
        $editTest->details= $request->details;
        $editTest->name = $request->name;
        $editTest->designation = $request->designation;
        $editTest->located = $request->located;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time().'.'.$ext;
            $image->storeAs('public/images/test',$file);
            $editTest->image=$file;
        }
        $editTest->update();
        Toastr::success('data updated successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function testimonialDelete($id){
        $test = Testimonial::find($id);
        $test->delete();
        Toastr::success('data deleted successfully', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
