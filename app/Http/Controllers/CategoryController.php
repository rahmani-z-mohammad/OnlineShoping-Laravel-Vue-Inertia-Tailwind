<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Category::all());
        return inertia('Category/Category', ['categories' =>
         Category::orderByDesc('created_at')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Category/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create($request->validate([
            'name' => 'required'
        ]));

        return redirect()->route('category.index')
        ->with('success','Data Inserted Succssfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return inertia('Category/Edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->validate([
            'name' => 'required'
        ]));

        return redirect()->route('category.index')
        ->with('success','Data Updated Succssfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->deleteOrFail();

        return redirect()->route('category.index')
        ->with('danger','Data Deleted Succssfully!');
    }
}
