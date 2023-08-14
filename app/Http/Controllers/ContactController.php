<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::where('user_id' ,'=',Auth::id())
        ->filter($request->query())
        ->orderBy('created_at')
        ->get();

        session('success');

        return view('contacts.index' , compact('contacts'));

    }

    public function create(Contact $contact)
    {

        return view('contacts.create' , compact('contact'));

    }

    public function store(ContactRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) { 

            $image = $request->file('image');

            $path = Contact::uploadImage($image);

            $validated['image'] = $path;

        }

        $validated = array_merge($validated, ['user_id' => Auth::id()]);

        Contact::create($validated);

        return redirect()->route('contacts.index')->with('success' , 'Contact Cerates Successfuly');

    }

    public function show(Contact $contact)
    {

        return view('contacts.show' , compact('contact'));

    }

    public function edit(Contact $contact)
    {

        return view('contacts.edit' , compact('contact'));

    }

    public function update(ContactRequest $request, Contact $contact)
    {

        $validated = $request->validated();
        

        if ($request->hasFile('image')) { 

            $image = $request->file('image');

            $path = Contact::uploadImage($image);

            $validated['image'] = $path;

        }
        
        $oldImage = $contact->image;

        $contact->update($validated);

        if($oldImage && $oldImage != $contact->image){

            Contact::deleteImage($oldImage);

        }

        return redirect()->route('contacts.index')->with('success' , 'Contact Updated Successfuly');

    }

    public function destroy(Contact $contact)
    {

        Contact::deleteImage($contact->image);

        $contact->delete();

        return redirect()->route('contacts.index')->with('success' , 'Contact Deleted Successfuly');
        
    }
}
