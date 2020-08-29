<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
    	$q = $request->input('q');

    	if ($q) {
    		$categories = Category::where('cate_name', 'LIKE', "%$q%")->paginate(10);
    	} else {
	    	$categories = Category::paginate(10);
    	}

    	return view('backend.categories.index', compact('categories'));
    }

    public function create(Request $request)
    {
    	return view('backend.categories.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

    	$category = new Category;
        $category->fill($request->all());
    	$category->save();
    	return redirect()->route('admin.categories.index');
    }

    public function edit(int $id)
    {
        return view('backend.categories.edit', [
            'category' => Category::find($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $category = Category::find($id);
        $category->name = $request->name;

        if ($category->save()) {
            return redirect()->route('admin.categories.index');
        }

        return redirect()->route('admin.categories.edit', ['id' => $id]);
    }

    public function destroy(int $id)
    {
        Category::destroy($id);
        return redirect()->route('admin.categories.index');
    }
}
