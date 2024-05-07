<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GeneralInfo;
use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(GeneralInfo $generalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralInfo $generalInfo)
    {
        return view('backend.generalInfo.edit', compact('generalInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GeneralInfo $generalInfo)
    {
        $request->validate([
            'site_name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
            'favicon_logo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
            'footer_logo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
            'bradcrum_photo' => 'nullable|mimes:png,jpg,jpeg|max:2000',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'youtube' => 'nullable',
            'address' => 'nullable',
            'copyright_text' => 'nullable',
        ]);

        if ($request->has('logo')) {
            $folder = 'general_info';
            $response = cloudUpload($request->logo, $folder, $generalInfo->logo);
            $generalInfo->logo = $response;
        }
        if ($request->has('favicon_logo')) {
            $folder = 'general_info';
            $response = cloudUpload($request->favicon_logo, $folder, $generalInfo->favicon_logo);
            $generalInfo->favicon_logo = $response;
        }
        if ($request->has('footer_logo')) {
            $folder = 'general_info';
            $response = cloudUpload($request->footer_logo, $folder, $generalInfo->footer_logo);
            $generalInfo->footer_logo = $response;
        }
        if ($request->has('bradcrum_photo')) {
            $folder = 'general_info';
            $response = cloudUpload($request->bradcrum_photo, $folder, $generalInfo->bradcrum_photo);
            $generalInfo->bradcrum_photo = $response;
        }
        if ($request->has('p_d_bradcrumb')) {
            $folder = 'general_info';
            $response = cloudUpload($request->p_d_bradcrumb, $folder, $generalInfo->p_d_bradcrumb);
            $generalInfo->p_d_bradcrumb = $response;
        }

        $generalInfo->update([
            'site_name' => $request->site_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'logo' => $generalInfo->logo,
            'favicon_logo' => $generalInfo->favicon_logo,
            'footer_logo' => $generalInfo->footer_logo,
            'bradcrum_photo' => $generalInfo->bradcrum_photo,
            'p_d_bradcrumb' => $generalInfo->p_d_bradcrumb,
            'footer_des' => $request->footer_des,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'whatsapp' => $request->whatsapp,
            'youtube' => $request->youtube,
            'address' => $request->address,
            'year_of_exp_title' => $request->year_of_exp_title,
            'year_of_exp' => $request->year_of_exp,
            'happy_client_title' => $request->happy_client_title,
            'happy_client' => $request->happy_client,
            'corporate_client_title' => $request->corporate_client_title,
            'corporate_client' => $request->corporate_client,
            'projects_title' => $request->projects_title,
            'projects' => $request->projects,
            'copyright_text' => $request->copyright_text,
            'google_tag' => $request->google_tag,
            'facebook_pixel' => $request->facebook_pixel,
            'facebook_messenger' => $request->facebook_messenger,
            'bullet_text' => $request->bullet_text,
            'bullet_content' => $request->bullet_content,

        ]);
        return back()->with('success', 'General info updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralInfo $generalInfo)
    {
        //
    }
}
