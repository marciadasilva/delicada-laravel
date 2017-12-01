<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');//->except(['index', 'show'])
    }

    public function create(){
        return view('users.create-categories');
    }

    public function store(){
        // Form validation
        $this->validate(request(), [
            'name' => 'required'
        ]);

        // Create and save the category on DB
        Category::create([
            'user_id' =>auth()->user()->id,
            'name' => request('name')
        ]);

        return redirect()->route('categories');
    }

    public function show(Category $category){
        // Return the single page with 1 category
        return view('users.show-single-category', compact('category'));
    }

    public function index(){
        // Get all categories
        $categories = Category::latest()->get();
        // Return the show-categories page
        return view('users.show-categories', compact('categories'));
    }

    public function update(Category $category){
        // Update
        Category::where('id',$category->id)->update(['name'=>request('name')]);
        // Get the new list of category
        $categories = Category::latest()->get();
        // Return the show-categories page
        return view('users.show-categories', compact('categories'));
    }

    public function destroy(Category $category){
        // Delete
        Category::find($category->id)->delete();
        // Get the new list of category
        $categories = Category::latest()->get();
        // Return the show-categories page
        return view('users.show-categories', compact('categories'));
    }
}
