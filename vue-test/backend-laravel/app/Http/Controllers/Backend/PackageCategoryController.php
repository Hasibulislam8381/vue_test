<?php

namespace App\Http\Controllers\Backend;

use App\Models\Packages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PackageCategory;
use App\Http\Controllers\Controller;

class PackageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeRequirement = PackageCategory::where('status', 'publish')->paginate(10);
        $draftRequirement = PackageCategory::where('status', 'draft')->paginate(10);
        $trashedRequirement = PackageCategory::onlyTrashed()->orderBy('id', 'desc')->paginate(10);
        return view('backend.packageCategory.index', compact('activeRequirement', 'draftRequirement', 'trashedRequirement'));
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
        $photo = $request->file('photo');
        if ($photo) {
            $folder = 'Packages';
            $response = cloudUpload($photo, $folder, null);
            $photo = $response;
        }
        PackageCategory::create([

            'name' => $request->name,
            'details' => $request->description,
            'banner_photo' => $photo,
            'slug' => Str::slug($request->name),

        ]);
        return back()->with('success', 'Package Category Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PackageCategory $packageCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageCategory $packageCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackageCategory $packageCategory)
    {

        $packageCategory = PackageCategory::where('id', $request->id)->first();
        if ($request->has('photo')) {
            $folder = 'package';
            $response = cloudUpload($request->photo, $folder, $packageCategory->banner_photo);
            $packageCategory->banner_photo = $response;
        }


        PackageCategory::where('id', $request->id)->update([
            'name' => $request->name,
            'details' => $request->description,
            'slug' => Str::slug($request->slug ?? $request->name),
            'banner_photo' => $packageCategory->banner_photo
        ]);
        return back()->with('success', 'Package Category Info Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageCategory $packageCategory)
    {
        $packageCategory->status == 'draft';
        $packageCategory->save();
        $packageCategory->delete();
        return back()->with('success', 'packageCategory Trashed');
    }
    public function status(PackageCategory $packageCategory)
    {
        if ($packageCategory->status == 'publish') {
            $packageCategory->status = 'draft';
            $packageCategory->save();
        } else {
            $packageCategory->status = 'publish';
            $packageCategory->save();
        }
        return back()->with('success', $packageCategory->status == 'publish' ? 'packageCategory type Published' : 'packageCategory Type Drafted');
    }
    public function reStore($id)
    {
        $terms = PackageCategory::onlyTrashed()->find($id);
        $terms->restore();
        return back()->with('success', 'packageCategory Info Restored');
    }
    public function permDelete($id)
    {
        $terms = PackageCategory::onlyTrashed()->find($id);
        $terms->forceDelete();
        return back()->with('success', 'PackageCategory Info Deleted');
    }
}
