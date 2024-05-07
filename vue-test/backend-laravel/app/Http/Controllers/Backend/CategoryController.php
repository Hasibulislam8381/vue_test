<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $activeRequirement = Category::where('status', 'publish')->paginate(10);
        $draftRequirement = Category::where('status', 'draft')->paginate(10);
        $trashedRequirement = Category::onlyTrashed()->orderBy('id', 'desc')->paginate(10);
        return view('backend.category.index', compact('activeRequirement', 'draftRequirement', 'trashedRequirement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Category::create([

            'category' => $request->category,
            'property_type' => $request->property_type,

        ]);
        Toastr::success('Category Added', 'success');
        return back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


        Category::where('id', $request->id)->update([
            'category' => $request->category,
            'property_type' => $request->property_type,

        ]);
        return back()->with('success', 'Category  Info Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->status == 'draft';
        $category->save();
        $category->delete();
        return back()->with('success', 'Category Trashed');
    }
    public function status(Category $category)
    {
        if ($category->status == 'publish') {
            $category->status = 'draft';
            $category->save();
        } else {
            $category->status = 'publish';
            $category->save();
        }
        return back()->with('success', $category->status == 'publish' ? 'Category type Published' : 'Category Drafted');
    }
    public function reStore($id)
    {
        $terms = Category::onlyTrashed()->find($id);
        $terms->restore();
        return back()->with('success', 'Category Info Restored');
    }
    public function permDelete($id)
    {
        $terms = Category::onlyTrashed()->find($id);
        $terms->forceDelete();
        return back()->with('success', 'CategoryDeleted');
    }
}
