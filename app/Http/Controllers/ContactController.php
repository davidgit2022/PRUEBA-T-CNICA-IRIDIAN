<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use Carbon\Carbon;
use App\Models\Area;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function showForm(): View
    {
        $areas = Area::all();
        return view('contact.form', compact('areas'));
    }

    public function store(ContactStoreRequest $request): RedirectResponse
    {

        $lastMessage = Contact::where('email', $request->email)
            ->whereDate('created_at', Carbon::today())
            ->first();

        if ($lastMessage) {
            return redirect()->back()->with('error', 'No puedes enviar más de un mensaje al día.');
        }


        $contact = new Contact();
        $contact->name = $request->name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->area_id = $request->areaId;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}
