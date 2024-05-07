<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metas = Meta::paginate(20);
        return view('backend.meta.index', compact('metas'));
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
    public function show(Meta $meta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meta $meta)
    {
        return view('backend.meta.edit', compact('meta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meta $meta)
    {
        $request->validate([
            'title' => 'nullable',
            'page_name' => 'nullable',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);

        if ($request->has('meta_photo')) {
            $folder = 'meta';
            $response = cloudUpload($request->meta_photo, $folder, $meta->meta_photo);
            $meta->meta_photo = $response;
        }
        if ($request->has('bradcamp')) {
            $folder = 'meta';
            $response = cloudUpload($request->bradcamp, $folder, $meta->bradcamp);
            $meta->bradcamp = $response;
        }

        $meta->update([
            'title' => $request->title,
            'page_name' => $request->page_name,
            'meta_photo' => $meta->meta_photo,
            'bradcamp' => $meta->bradcamp,
            'description' => $request->description,
            'keyword' => $request->keyword,
        ]);
        return redirect(route('backend.meta.index'))->with('success', 'Meta Info Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meta $meta)
    {
        $meta->delete();
        return back()->with('success', 'Meta Info Deleted!');
    }
}
