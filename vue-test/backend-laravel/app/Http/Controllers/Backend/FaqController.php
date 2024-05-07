<?php

namespace App\Http\Controllers\Backend;

use App\Models\Faq;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $activeFaq = Faq::where('status', 'publish')
            ->whereNotNull('title')
            ->paginate(10);
        $draftFaq = Faq::where('status', 'draft')->paginate(10);
        $trashedFaq = Faq::onlyTrashed()->orderBy('id', 'desc')->paginate(10);
        $faqdata =  Faq::where('status', 'publish')
            ->where('title', NULL)
            ->paginate(10);

        return view('backend.faq.index', compact('activeFaq', 'draftFaq', 'trashedFaq', 'faqdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $faq = Faq::whereNotNull('title')->get();

        return view('backend.faq.create', compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $photo = $request->file('photo');
        // if ($photo) {
        //     $photoName = uniqid() . '.' . $photo->getClientOriginalExtension();
        //     Image::make($photo)->save(public_path('storage/blog/' . $photoName));
        // }
        if ($photo) {
            $folder = 'faq';
            $response = cloudUpload($photo, $folder, null);
            $photo = $response;
        }

        Faq::create([

            'title' => $request->title,
            'photo' => $photo,
            'alt_text' => $request->alt_text,
            'slug' => Str::slug($request->title),

            'question' => $request->question,
            'answer' => $request->answer,
            'parent_id' => $request->parent_id,
        ]);
        return back()->with('success', 'Faq Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        //
        $faqparent =  Faq::whereNotNull('title')->get();
        return view('backend.faq.edit', compact('faq', 'faqparent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {


        if ($request->has('photo')) {
            $folder = 'faq';
            $response = cloudUpload($request->photo, $folder, $faq->photo);
            $faq->photo = $response;
        }


        $faq->update([
            'title' => $request->title,
            'photo' => $faq->photo,
            'alt_text' => $request->alt_text,
            'slug' => Str::slug($request->title),
            'question' => $request->question,
            'answer' => $request->answer,
            'parent_id' => $request->parent_id,

        ]);

        return redirect(route('backend.faq.index'))->with('success', 'Why Invest Info Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->status == 'draft';
        $faq->save();
        $faq->delete();
        return back()->with('success', 'Faq Item Trashed');
    }
    public function status(Faq $faq)
    {
        if ($faq->status == 'publish') {
            $faq->status = 'draft';
            $faq->save();
        } else {
            $faq->status = 'publish';
            $faq->save();
        }
        return back()->with('success', $faq->status == 'publish' ? 'Faq info Published' : 'Faq info Drafted');
    }
    public function reStore($id)
    {
        $faq = Faq::onlyTrashed()->find($id);
        $faq->restore();
        return back()->with('success', 'Faq Info Restored');
    }
    public function permDelete($id)
    {
        $faq = Faq::onlyTrashed()->find($id);
        $faq->forceDelete();
        return back()->with('success', 'Faq Info Deleted');
    }
}
