<?php

namespace App\Http\Controllers\Backend;

use App\Models\Packages;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PackageCategory;
use App\Models\PackagesDetails;
use App\Models\PackageType;
use Brian2694\Toastr\Facades\Toastr;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeRequirement = Packages::where('status', 'publish')->paginate(10);
        $draftRequirement = Packages::where('status', 'draft')->paginate(10);
        $trashedRequirement = Packages::onlyTrashed()->orderBy('id', 'desc')->paginate(10);
        $package_one = Packages::get();
        return view('backend.packages.index', compact('activeRequirement', 'draftRequirement', 'trashedRequirement', 'package_one'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $parent = PackagesDetails::get();
        $package_type = PackageType::get();
        $package_category = PackageCategory::get();
        return view('backend.packages.create', compact('package_type', 'package_category', 'parent'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $g_photo = $request->file('g_photo');
        $meta_photo = $request->file('meta_photo');
        $photo = $request->file('photo');
        $thumb_photo = $request->file('thumb_photo');

        $images = [];
        if ($g_photo) {

            foreach ($g_photo as $photos) {
                $folder = 'property';
                $response = cloudUpload($photos, $folder, null);
                $images[] = $response;
            }
        }
        $images = implode(";", $images);

        if ($photo) {
            $folder = 'Packages';
            $response = cloudUpload($photo, $folder, null);
            $photo = $response;
        }
        if ($thumb_photo) {
            $folder = 'Packages';
            $response = cloudUpload($thumb_photo, $folder, null);
            $thumb_photo = $response;
        }
        if ($meta_photo) {
            $folder = 'Packages';
            $response = cloudUpload($meta_photo, $folder, null);
            $meta_photo = $response;
        }
        Packages::create([

            'title' => $request->title,
            'package_type_id' => $request->package_type_id,
            'parent_slug' => $request->parent_slug,
            'package_category_id' => $request->package_category_id,
            'slug' => Str::slug($request->title),
            'package_type' => $request->package_type,
            'photo' => $photo,
            'thumb_photo' => $thumb_photo,
            'gallery_image' => $images,
            'price' => $request->price,
            'description' => $request->description,
            'about_package' => $request->about_package,
            'meta_photo' => $meta_photo,
            'm_title' => $request->m_title,
            'm_keyword' => $request->m_keyword,
            'm_description' => $request->m_description,

        ]);
        Toastr::success('Packages Added', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Packages $packages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Packages $packages)
    {
        $package_category = PackageCategory::get();
        $package_type = PackageType::get();
        $parent = PackagesDetails::get();
        return view('backend.packages.edit', compact('packages', 'package_type', 'package_category', 'parent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Packages $packages)
    {
        $g_photo = $request->file('g_photo');

        $hidden_image = $request->image;

        $images = [];
        if ($request->has('g_photo')) {
            if ($g_photo) {
                foreach ($g_photo as $photos) {
                    $folder = 'property';
                    $response = cloudUpload($photos, $folder, null);
                    $images[] = $response;
                }
            }
        }
        $images = implode(";", $images);
        if (is_array($hidden_image)) {
            $hidden_image = implode(";", $hidden_image);
        }
        if ($images) {
            $images .= ";";
        }
        $allphoto = $images . $hidden_image;
        $allphoto = rtrim($allphoto, ";");
        if ($request->has('meta_photo')) {
            $folder = 'package';
            $response = cloudUpload($request->meta_photo, $folder, $packages->meta_photo);
            $packages->meta_photo = $response;
        }
        if ($request->has('photo')) {
            $folder = 'package';
            $response = cloudUpload($request->photo, $folder, $packages->photo);
            $packages->photo = $response;
        }
        if ($request->has('thumb_photo')) {
            $folder = 'package';
            $response = cloudUpload($request->thumb_photo, $folder, $packages->thumb_photo);
            $packages->thumb_photo = $response;
        }
        if ($request->has('meta_photo')) {
            $packages->update([
                'title' => $request->title,
                'package_type_id' => $request->package_type_id,
                'package_category_id' => $request->package_category_id,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->slug ? $request->slug : $request->title),
                'package_type' => $request->package_type,
                'price' => $request->price,
                'description' => $request->description,
                'about_package' => $request->about_package,
                'gallery_image' => $allphoto,
                'meta_photo' => $packages->meta_photo,
                'm_title' => $request->m_title,
                'm_keyword' => $request->m_keyword,
                'm_description' => $request->m_description,

            ]);
            Toastr::success('Packages  Info Edited!', 'Success');
            return back();
        }
        if ($request->has('thumb_photo')) {
            $packages->update([
                'title' => $request->title,
                'package_type_id' => $request->package_type_id,
                'package_category_id' => $request->package_category_id,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->slug ?? $request->title),
                'package_type' => $request->package_type,
                'price' => $request->price,
                'description' => $request->description,
                'about_package' => $request->about_package,
                'gallery_image' => $allphoto,
                'thumb_photo' => $packages->thumb_photo,
                'm_title' => $request->m_title,
                'm_keyword' => $request->m_keyword,
                'm_description' => $request->m_description,

            ]);
            Toastr::success('Packages  Info Edited!', 'Success');
            return back();
        } else {
            if ($request->has('photo')) {
                $packages->update([
                    'title' => $request->title,
                    'package_type_id' => $request->package_type_id,
                    'package_category_id' => $request->package_category_id,
                    'parent_id' => $request->parent_id,
                    'slug' => Str::slug($request->slug ?? $request->title),
                    'package_type' => $request->package_type,
                    'price' => $request->price,
                    'description' => $request->description,
                    'about_package' => $request->about_package,
                    'gallery_image' => $allphoto,
                    'photo' => $packages->photo,
                    'm_title' => $request->m_title,
                    'm_keyword' => $request->m_keyword,
                    'm_description' => $request->m_description,

                ]);
                Toastr::success('Packages  Info Edited!', 'Success');
                return back();
            } else {
                $packages->update([
                    'title' => $request->title,
                    'package_type_id' => $request->package_type_id,
                    'package_category_id' => $request->package_category_id,
                    'parent_id' => $request->parent_id,
                    'slug' => Str::slug($request->slug ?? $request->title),
                    'package_type' => $request->package_type,
                    'price' => $request->price,
                    'description' => $request->description,
                    'about_package' => $request->about_package,
                    'gallery_image' => $allphoto,
                    'm_title' => $request->m_title,
                    'm_keyword' => $request->m_keyword,
                    'm_description' => $request->m_description,

                ]);
                Toastr::success('Packages  Info Edited!', 'Success');
                return back();
            }
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Packages $packages)
    {
        $packages->status == 'draft';
        $packages->save();
        $packages->delete();
        return back()->with('success', 'Packages Trashed');
    }
    public function status(Packages $packages)
    {
        if ($packages->status == 'publish') {
            $packages->status = 'draft';
            $packages->save();
        } else {
            $packages->status = 'publish';
            $packages->save();
        }
        Toastr::success($packages->status == 'publish' ? 'Packages Published' : 'packages Drafted', 'Success');
        return back();
    }
    public function reStore($id)
    {
        $terms = Packages::onlyTrashed()->find($id);
        $terms->restore();
        Toastr::success('Packages Info Restored', 'Success');
        return back();
    }
    public function permDelete($id)
    {
        $terms = Packages::onlyTrashed()->find($id);
        $terms->forceDelete();
        Toastr::success('Packages Deleted', 'Success');
        return back();
    }
}
