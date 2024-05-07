<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activePartner = ContactUs::where('status', 'publish')->paginate(10);
        $draftPartner = ContactUs::where('status', 'draft')->paginate(10);
        $trashedPartner = ContactUs::onlyTrashed()->orderBy('id', 'desc')->paginate(10);
        return view('backend.contactUs.index', compact('activePartner', 'draftPartner', 'trashedPartner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        $contact = ContactUs::where('id', $request->id)->first();


        if ($request->has('b_photo')) {
            $folder = 'conatct';
            $response = cloudUpload($request->b_photo, $folder, $contact->b_photo);
            $contact->b_photo = $response;
        }
        if ($request->has('quote_image')) {
            $folder = 'contact';
            $response = cloudUpload($request->quote_image, $folder, $contact->quote_image);
            $contact->quote_image = $response;
        }
        if ($request->has('contact_image')) {
            $folder = 'contact';
            $response = cloudUpload($request->contact_image, $folder, $contact->contact_image);
            $contact->contact_image = $response;
        }




        ContactUs::where('id', $request->id)->update([
            'title' => $request->title,
            'map' => $request->map,
            'description' => $request->description,

            'b_photo' => $contact->b_photo,
            'quote_image' => $contact->quote_image,
            'contact_image' => $contact->contact_image,
        ]);

        return back()->with('success', 'Contact Us Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
