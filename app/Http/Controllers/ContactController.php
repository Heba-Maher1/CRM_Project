<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();

        session('success');
        return view('contacts.index' , compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Contact $contact)
    {
        return view('contacts.create' , compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contacts.show' , compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit' , compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {

        $validated = $request->validated();
        

        if ($request->hasFile('image')) { 
            $image = $request->file('image');
            $path = Contact::uploadImage($image);

            $validated['image'] = $path;

        }

        
        $validated->merge([
            'user_id' => Auth::id(),
        ]);
        
        $oldImage = $contact->image;
        $contact->update($validated);

        if($oldImage && $oldImage != $contact->image){
            Contact::deleteImage($oldImage);
        }


        return redirect()->route('contacts.index')->with('success' , 'Contact Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        Contact::deleteImage($contact->image);

        $contact->delete();

        return redirect()->route('contacts.index')->with('success' , 'Contact Deleted Successfuly');
    }
}
