<?php

namespace App\Http\Controllers\Backend;

use App\Models\Packages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PackagesDetails;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PackagesDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activedreamWithUs = PackagesDetails::where('status', 'publish')->paginate(10);
        $draftdreamWithUs = PackagesDetails::where('status', 'draft')->paginate(10);
        $trasheddreamWithUs = PackagesDetails::onlyTrashed()->orderBy('id', 'desc')->paginate(10);

        return view('backend.package_details.index', compact('activedreamWithUs', 'draftdreamWithUs', 'trasheddreamWithUs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.package_details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $logo = $request->file('logo');
        $photo = $request->file('photo');
            $bradcamp = $request->file('bradcamp');
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
        if ($photo) {
            $folder = 'services';
            $response = cloudUpload($photo, $folder, null);
            $photo = $response;
        }
         if ($bradcamp) {
            $folder = 'services';
            $response = cloudUpload($bradcamp, $folder, null);
            $bradcamp = $response;
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

        PackagesDetails::create([
            'logo' => $logo,
            'photo' => $photo,
            'bradcamp' => $bradcamp,
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
        Toastr::success('Package Details Added', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(PackagesDetails $packagesDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackagesDetails $packagesDetails)
    {
        return view('backend.package_details.edit', compact('packagesDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackagesDetails $packagesDetails)
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
            $response = cloudUpload($request->b_photo, $folder, $packagesDetails->b_photo);
            $packagesDetails->b_photo = $response;
        }
        if ($logo) {
            $folder = 'services';
            $response = cloudUpload($request->logo, $folder, $packagesDetails->logo);
            $packagesDetails->logo = $response;
        }
         if ($bradcamp) {
            $folder = 'services';
            $response = cloudUpload($request->bradcamp, $folder, $packagesDetails->bradcamp);
            $packagesDetails->bradcamp = $response;
        }
        if ($photo) {
            $folder = 'services';
            $response = cloudUpload($request->photo, $folder, $packagesDetails->photo);
            $packagesDetails->photo = $response;
        }
        if ($work_process_photo) {
            $folder = 'services';
            $response = cloudUpload($request->work_process_photo, $folder, $packagesDetails->work_process_photo);
            $packagesDetails->work_process_photo = $response;
        }
        if ($step_of_work_process_photo) {
            $folder = 'services';
            $response = cloudUpload($request->step_of_work_process_photo, $folder, $packagesDetails->step_of_work_process_photo);
            $packagesDetails->step_of_work_process_photo = $response;
        }
        if ($contact_background) {
            $folder = 'services';
            $response = cloudUpload($request->contact_background, $folder, $packagesDetails->contact_background);
            $packagesDetails->contact_background = $response;
        }
        if ($important_photo) {
            $folder = 'services';
            $response = cloudUpload($request->important_photo, $folder, $packagesDetails->important_photo);
            $packagesDetails->important_photo = $response;
        }
        if ($meta_photo) {
            $folder = 'services';
            $response = cloudUpload($request->meta_photo, $folder, $packagesDetails->meta_photo);
            $packagesDetails->meta_photo = $response;
        }

        // if ($request->hasFile('video')) {
        //     $folder = 'videoGallery';
        //     $response = cloudUpload($request->video, $folder, $videoGallery->video);
        //     $videoGallery->video = $response;
        // }

        $packagesDetails->update([


            'photo' => $packagesDetails->photo,
             'bradcamp' => $packagesDetails->bradcamp,
            'b_photo' => $packagesDetails->b_photo,
            'alt_text' => $request->alt_text,
            'title' => $request->title,
            'title_head' => $request->title_head,
            'description_head' => $request->description_head,
            'slug' => Str::slug($request->slug ? $request->slug : $request->title),
            'description' => $request->description,
            'work_process_photo' => $packagesDetails->work_process_photo,
            'step_of_work_process_photo' => $packagesDetails->step_of_work_process_photo,
            'contact_background' => $packagesDetails->contact_background,

            'work_process' => $request->work_process,
            'important_photo' => $packagesDetails->important_photo,
            'important_description' => $request->important_description,

            'meta_photo' => $packagesDetails->meta_photo,
            'm_title' => $request->m_title,
            'm_keyword' => $request->m_keyword,
            'm_description' => $request->m_description,

        ]);
        Toastr::success('Package Details  Updated', 'success');
        return redirect(route('backend.package_details.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackagesDetails $packagesDetails)
    {
        $packagesDetails->status == 'draft';
        $packagesDetails->save();
        $packagesDetails->delete();
        Toastr::success('Package Details  Trashed', 'success');
        return back();
    }
    public function status(PackagesDetails $packagesDetails)
    {
        if ($packagesDetails->status == 'publish') {
            $packagesDetails->status = 'draft';
            $packagesDetails->save();
        } else {
            $packagesDetails->status = 'publish';
            $packagesDetails->save();
        }
        Toastr::success($packagesDetails->status == 'publish' ? 'Packages Details Published' : 'Packages Details Drafted', 'success');
        return back();
    }
    public function reStore($id)
    {
        $terms = PackagesDetails::onlyTrashed()->find($id);
        $terms->restore();
        Toastr::success('Package Details Info Restored', 'success');
        return back();
    }
    public function permDelete($id)
    {
        $terms = PackagesDetails::onlyTrashed()->find($id);
        $terms->forceDelete();
        Toastr::success('Package Details Info Deleted', 'success');
        return back();
    }
}
