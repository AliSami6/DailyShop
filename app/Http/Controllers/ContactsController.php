<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class ContactsController extends Controller
{

    public function createContactFormInput()
    {
        return view('frontend.pages.contact');
    }
    public function ContactFormInput(Request $request)
    {
        // Form validation
        $this->validate(
            $request,
            [
                'name' => 'required|string|max:25',
                'email' => 'required|email',
                'subject' => 'required|string',
                'company' => 'required|string',
                'msg' => 'required|string'
            ],
            [
                'name.required' => 'Please input your name',
                'email.required' => 'Please input your email',
                'msg.required' => 'Please input your message',
                'subject.required' => 'Please input your subject',
                'company.required' => 'Please input your company',
                'name.max' => 'your Name Less Than 25 Charaters'
            ]
        );

        //$ip_address = $_SERVER['HTTP_CLIENT_IP'];
        //  Store data in database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->msg = $request->msg;
        $contact->company = $request->company;
        $contact->subject = $request->subject;
        $contact->save();
        Toastr::success('We have received your message', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
