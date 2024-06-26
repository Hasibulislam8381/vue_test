<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\VideoGallery;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activevideo = VideoGallery::where('status', 'publish')->paginate(10);
        $draftvideo = VideoGallery::where('status', 'draft')->paginate(10);
        $trashedvideo = VideoGallery::onlyTrashed()->orderBy('id', 'desc')->paginate(10);
        $whychooseModaldata = VideoGallery::get();
        return view('backend.video.index', compact('activevideo', 'draftvideo', 'trashedvideo','whychooseModaldata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        
        if ($photo) {
            $folder = 'videoGallery';
            $response = cloudUpload($photo, $folder, null);
            $photo = $response;
        }
        // if ($video) {
        //     $folder = 'videoGallery';
        //     $response = cloudUpload($video, $folder, null);
        //     $video = $response;
        // }

        // if ($request->hasFile('video')) {
        //     $video = $request->file('video');
        //     $videoName = time() . '_' . uniqid() . '.' . $video->getClientOriginalExtension();
        //     $video->move('storage/video', $videoName);
        // }
        
        VideoGallery::create([
            'title' => $request->title,
            'alt_text' => $request->alt_text,
            'photo' => $photo,
            'video' => $request->video,

        ]);
        return back()->with('success', 'Video Gallery Info Added Successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoGallery $videoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoGallery $videoGallery)
    {
        return view('backend.video.edit',compact('videoGallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoGallery $videoGallery)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $folder = 'videoGallery';
            $response = cloudUpload($request->photo, $folder, $videoGallery->photo);
            $videoGallery->photo = $response;
        }

        // if ($request->hasFile('video')) {
        //     $folder = 'videoGallery';
        //     $response = cloudUpload($request->video, $folder, $videoGallery->video);
        //     $videoGallery->video = $response;
        // }
        
        $videoGallery->update([
            'title' => $request->title,
            'alt_text' => $request->alt_text,
            'photo' => $videoGallery->photo,
            'video' => $request->video,

        ]);
        return redirect(route('backend.videoGallery.index'))->with('success', 'Video Gallery Info Update Successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoGallery $videoGallery)
    {
        $videoGallery->status == 'draft';
        $videoGallery->save();
        $videoGallery->delete();
        return back()->with('success', 'videoGallery Info Trashed');
    }
    public function status(VideoGallery $videoGallery)
    {
        if ($videoGallery->status == 'publish') {
            $videoGallery->status = 'draft';
            $videoGallery->save();
        } else {
            $videoGallery->status = 'publish';
            $videoGallery->save();
        }
        return back()->with('success', $videoGallery->status == 'publish' ? 'VideoGallery  info Published' : 'VideoGallery Info Drafted');
    }
    public function reStore($id)
    {
        $videoGallery = VideoGallery::onlyTrashed()->find($id);
        $videoGallery->restore();
        return back()->with('success', 'VideoGallery Info Restored');
    }
    public function permDelete($id)
    {
        $videoGallery = VideoGallery::onlyTrashed()->find($id);
        $videoGallery->forceDelete();
        return back()->with('success', 'VideoGallery Info Deleted');
    }
}
