<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\SaveCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     */
    public function index()
    {
        if (request()->status == 'deleted') {
            $categories = Category::onlyTrashed()->get();
        } else {
            $categories = Category::all();
        }
        return view('categories.index')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     *
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created category in storage.
     *
     */
    public function store(SaveCategoryRequest $request)
    {
        Category::create($request->all());
        return back()->with('success', 'Category Created Successfully!');
    }

    /**
     * Display the specified category.
     *
     */
    public function show(Category $category)
    {
        return view('categories.show')->with(compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     *
     */
    public function edit(Category $category)
    {
        return view('categories.edit')->with(compact('category'));
    }

    /**
     * Update the specified category in storage.
     *
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        Category::where('id', $category->id)->update([
            'name' => $request->input('name'),
        ]);
        return redirect()->route('categories.index')->with('success', 'Category Updated!');
    }

    /**
     * Remove the specified category from storage.
     *
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success','Category Deleted!');
    }

    public function fdelete($id)
    {
        Category::onlyTrashed()->where('id', $id)->forceDelete();
        return back()->with('success', 'Category permanently deleted successfully!');
    }

    public function restore($id)
    {
        Category::onlyTrashed()->where('id', $id)->restore();
        return redirect()->route('categories.index')->with('success', 'Category restored successfully!');
    }
}
