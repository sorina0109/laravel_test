<?php

namespace App\Http\Controllers\Front;

use App\Models\Contact;
use App\Mail\MailContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{

    // trimiterea formularului de contact
    public function storeContact(ContactFormRequest $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();

        Contact::create($data);

        Mail::to('admin@gmail.com')->send(new MailContact($data));

        return redirect()->back()
        ->with(['success' => 'Mesajul a fost trimis cu succes!']);
    }


}
