<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Http\Requests\CategoryFormRequest;


class CategoriesController extends Controller
{
    public function index(){
      $allCategories = Category::all();
      return view('backend.categories.index', compact('allCategories'));

    }

    public function create(){
      //
        return view('backend.categories.create');
    }

    public function store( CategoryFormRequest $request)
    {
      $name = $request->get('name');
      $category = new Category(
        array(
          'name' => $request->get('name'),
        )
      );
      $category->save();

      return redirect('/admin/categories/create')->with('status', 'A new category has been created! '. $name);
    }
}
