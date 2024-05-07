<?php

namespace App\Http\Controllers\Backend;

use App\Models\Services;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activedreamWithUs = Services::where('status', 'publish')->paginate(10);
        $draftdreamWithUs = Services::where('status', 'draft')->paginate(10);
        $trasheddreamWithUs = Services::onlyTrashed()->orderBy('id', 'desc')->paginate(10);

        return view('backend.services.index', compact('activedreamWithUs', 'draftdreamWithUs', 'trasheddreamWithUs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $logo = $request->file('logo');
        $bradcamp = $request->file('bradcamp');
        $photo = $request->file('photo');
        $work_process_photo = $request->file('work_process_photo');
        $step_of_work_process_photo = $request->file('step_of_work_process_photo');
        $contact_background = $request->file('contact_background');
        $important_photo = $request->file('important_photo');
        $meta_photo = $request->file('meta_photo');

        if ($logo) {
            $folder = 'services';
            $response = cloudUpload($logo, $folder, null);
            $logo = $response;
        }
        if ($bradcamp) {
            $folder = 'services';
            $response = cloudUpload($bradcamp, $folder, null);
            $bradcamp = $response;
        }
        if ($photo) {
            $folder = 'services';
            $response = cloudUpload($photo, $folder, null);
            $photo = $response;
        }
        if ($work_process_photo) {
            $folder = 'services';
            $response = cloudUpload($work_process_photo, $folder, null);
            $work_process_photo = $response;
        }
        if ($step_of_work_process_photo) {
            $folder = 'services';
            $response = cloudUpload($step_of_work_process_photo, $folder, null);
            $step_of_work_process_photo = $response;
        }
        if ($contact_background) {
            $folder = 'services';
            $response = cloudUpload($contact_background, $folder, null);
            $contact_background = $response;
        }
        if ($important_photo) {
            $folder = 'services';
            $response = cloudUpload($important_photo, $folder, null);
            $important_photo = $response;
        }
        if ($meta_photo) {
            $folder = 'services';
            $response = cloudUpload($meta_photo, $folder, null);
            $meta_photo = $response;
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

        Services::create([
            'logo' => $logo,
            'bradcamp' => $bradcamp,
            'photo' => $photo,
            'alt_text' => $request->alt_text,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'work_process_photo' => $work_process_photo,
            'step_of_work_process_photo' => $step_of_work_process_photo,
            'contact_background' => $contact_background,
            'work_process' => $request->work_process,
            'important_photo' => $important_photo,
            'important_description' => $request->important_description,

            'meta_photo' => $meta_photo,
            'm_title' => $request->m_title,
            'm_keyword' => $request->m_keyword,
            'm_description' => $request->m_description,
        ]);
        Toastr::success('Services Added', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
        return view('backend.services.edit', compact('services'));
    }
    public function editHead(Services $services)
    {
        //
        return view('backend.services.editHead', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {

        $bradcamp = $request->file('bradcamp');
        $logo = $request->file('logo');
        $photo = $request->file('photo');
        $work_process_photo = $request->file('work_process_photo');
        $step_of_work_process_photo = $request->file('step_of_work_process_photo');
        $contact_background = $request->file('contact_background');
        $important_photo = $request->file('important_photo');
        $meta_photo = $request->file('meta_photo');
        $b_photo = $request->file('b_photo');
        if ($b_photo) {
            $folder = 'whyBaganbari';
            $response = cloudUpload($request->b_photo, $folder, $services->b_photo);
            $services->b_photo = $response;
        }
        if ($logo) {
            $folder = 'services';
            $response = cloudUpload($request->logo, $folder, $services->logo);
            $services->logo = $response;
        }
        if ($bradcamp) {
            $folder = 'services';
            $response = cloudUpload($request->bradcamp, $folder, $services->bradcamp);
            $services->bradcamp = $response;
        }
        if ($photo) {
            $folder = 'services';
            $response = cloudUpload($request->photo, $folder, $services->photo);
            $services->photo = $response;
        }
        if ($work_process_photo) {
            $folder = 'services';
            $response = cloudUpload($request->work_process_photo, $folder, $services->work_process_photo);
            $services->work_process_photo = $response;
        }
        if ($step_of_work_process_photo) {
            $folder = 'services';
            $response = cloudUpload($request->step_of_work_process_photo, $folder, $services->step_of_work_process_photo);
            $services->step_of_work_process_photo = $response;
        }
        if ($contact_background) {
            $folder = 'services';
            $response = cloudUpload($request->contact_background, $folder, $services->contact_background);
            $services->contact_background = $response;
        }
        if ($important_photo) {
            $folder = 'services';
            $response = cloudUpload($request->important_photo, $folder, $services->important_photo);
            $services->important_photo = $response;
        }
        if ($meta_photo) {
            $folder = 'services';
            $response = cloudUpload($request->meta_photo, $folder, $services->meta_photo);
            $services->meta_photo = $response;
        }

        // if ($request->hasFile('video')) {
        //     $folder = 'videoGallery';
        //     $response = cloudUpload($request->video, $folder, $videoGallery->video);
        //     $videoGallery->video = $response;
        // }

        $services->update([


            'bradcamp' => $services->bradcamp,
            'photo' => $services->photo,
            'b_photo' => $services->b_photo,
            'alt_text' => $request->alt_text,
            'title' => $request->title,
            'title_head' => $request->title_head,
            'description_head' => $request->description_head,
            'slug' => Str::slug($request->slug ? $request->slug : $request->title),
            'description' => $request->description,
            'work_process_photo' => $services->work_process_photo,
            'step_of_work_process_photo' => $services->step_of_work_process_photo,
            'contact_background' => $services->contact_background,

            'work_process' => $request->work_process,
            'important_photo' => $services->important_photo,
            'important_description' => $request->important_description,

            'meta_photo' => $services->meta_photo,
            'm_title' => $request->m_title,
            'm_keyword' => $request->m_keyword,
            'm_description' => $request->m_description,

        ]);
        Toastr::success('Services  Updated', 'success');
        return redirect(route('backend.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        $services->status == 'draft';
        $services->save();
        $services->delete();
        return back()->with('success', 'services Trashed');
    }
    public function status(Services $services)
    {
        if ($services->status == 'publish') {
            $services->status = 'draft';
            $services->save();
        } else {
            $services->status = 'publish';
            $services->save();
        }
        return back()->with('success', $services->status == 'publish' ? 'services type Published' : 'boardOfDirector Drafted');
    }
    public function reStore($id)
    {
        $terms = Services::onlyTrashed()->find($id);
        $terms->restore();
        return back()->with('success', 'Services Info Restored');
    }
    public function permDelete($id)
    {
        $terms = Services::onlyTrashed()->find($id);
        $terms->forceDelete();
        return back()->with('success', 'Services Deleted');
    }
}
