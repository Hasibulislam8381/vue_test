<?php

namespace App\Http\Controllers\Backend;

use App\Models\PackageType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Packages;

class PackageTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeRequirement = PackageType::where('status', 'publish')->paginate(10);
        $draftRequirement = PackageType::where('status', 'draft')->paginate(10);
        $trashedRequirement = PackageType::onlyTrashed()->orderBy('id', 'desc')->paginate(10);
        return view('backend.packageType.index', compact('activeRequirement', 'draftRequirement', 'trashedRequirement'));
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
        PackageType::create([

            'name' => $request->name,
            'details' => $request->description,
            'slug' => Str::slug($request->name),

        ]);
        return back()->with('success', 'Package Type  Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PackageType $packageType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageType $packageType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackageType $packageType)
    {
        PackageType::where('id', $request->id)->update([
            'name' => $request->name,
            'details' => $request->description,
            'slug' => Str::slug($request->slug ?? $request->name),
        ]);
        return back()->with('success', 'Package Type Info Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageType $packageType)
    {
        $packageType->status == 'draft';
        $packageType->save();
        $packageType->delete();
        return back()->with('success', 'packageType Trashed');
    }
    public function status(PackageType $packageType)
    {
        if ($packageType->status == 'publish') {
            $packageType->status = 'draft';
            $packageType->save();
        } else {
            $packageType->status = 'publish';
            $packageType->save();
        }
        return back()->with('success', $packageType->status == 'publish' ? 'packageType type Published' : 'packageType Type Drafted');
    }
    public function reStore($id)
    {
        $terms = PackageType::onlyTrashed()->find($id);
        $terms->restore();
        return back()->with('success', 'PackageType Info Restored');
    }
    public function permDelete($id)
    {
        $terms = PackageType::onlyTrashed()->find($id);
        $terms->forceDelete();
        return back()->with('success', 'PackageType Info Deleted');
    }
}
