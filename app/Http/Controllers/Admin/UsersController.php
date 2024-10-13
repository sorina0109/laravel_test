<?php

namespace App\Http\Controllers\Admin;

use App\Models\Consult;
use App\Models\Contact;
use App\Models\Website;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UsersController extends Controller
{
    public function showUsers()
    {
        return view('admin.users.users-view');
    }

    //afisare lista mesaje form Contact
    public function listContact()
    {
        $contacts = Contact::paginate(12);

        return view('admin.users.user-msg')
            ->with('contacts', $contacts);
    }

     //stergere mesaje form Contact
    public function deleteContact($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        $mess = 'Mesajul de la ' . $contact->name . ' a fost sters din baza de date';

        return redirect(route('list.contact'))
            ->with('success', $mess);
    }

}
