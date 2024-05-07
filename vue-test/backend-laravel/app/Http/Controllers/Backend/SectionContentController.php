<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SectionContent;
use Illuminate\Http\Request;

class SectionContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sectionContent = SectionContent::orderBy('id','asc')->get();
        // return view('backend.sectionContent.index',compact('sectionContent'));

        $home = SectionContent::where('page_name','home_page')->orderBy('id','asc')->paginate(10);
        $about = SectionContent::where('page_name','about_us')->orderBy('id','asc')->paginate(10);
        $aboutPhoto = SectionContent::where('page_name','about_us')->whereNotNull('photo')->first();
        
        $fund = SectionContent::where('page_name','fund')->orderBy('id','asc')->paginate(10);
        $fundPhoto = SectionContent::where('page_name','fund')->whereNotNull('photo')->first();
        $service = SectionContent::where('page_name','service')->orderBy('id','asc')->paginate(10);
        $research = SectionContent::where('page_name','research')->orderBy('id','asc')->paginate(10);
        $researchPhoto = SectionContent::where('page_name','research')->whereNotNull('photo')->first();
        $navsection_content = SectionContent::where('page_name','nav')->orderBy('id','asc')->paginate(10);
        $navPhoto = SectionContent::where('page_name','nav')->whereNotNull('photo')->first();
        $service_content = SectionContent::where('page_name','service')->orderBy('id','asc')->paginate(10);
        $servicePhoto = SectionContent::where('page_name','service')->whereNotNull('photo')->first();
        $blog_content = SectionContent::where('page_name','service')->orderBy('id','asc')->paginate(10);
        $blogPhoto = SectionContent::where('page_name','blog')->whereNotNull('photo')->first();
        return view('backend.sectionContent.test',compact('home','about','fund','service','research','navsection_content','aboutPhoto','fundPhoto','researchPhoto','navPhoto','service_content','servicePhoto','blogPhoto','blog_content'));


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
    public function show(SectionContent $sectionContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionContent $sectionContent)
    {
        return view('backend.sectionContent.edit',compact('sectionContent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectionContent $sectionContent)
    {
        

        if ($request->has('photo')) {
            $folder = 'sectionContent';
            $response = cloudUpload($request->photo, $folder, $sectionContent->photo);
            $sectionContent->photo = $response;
        }

        SectionContent::where('id', $request->id)->update([
            'header'=>$request->header,
            'sub_header'=>$request->sub_header,
            'content'=>$request->content,
        ]);

        $sectionContent->update([            
            'photo' => $sectionContent->photo,
        ]);
        
        return back()->with('success','Section Content Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionContent $sectionContent)
    {
        //
    }
}
