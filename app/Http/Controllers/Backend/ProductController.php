<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');

        if ($q) {
            $products = Product::where('name', 'LIKE', "%$q%")->paginate(5);
        } else {
            $products = Product::paginate(5);
        }

        return view('backend.products.index', compact('products', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'star' => 'required',
            'image' => 'required',
            'price' => 'required|digits_between:0,999999999',
            'category_id' => 'required',
        ], [
            'price.digits_between' => 'Price must greater than 0'
        ]);

        $product = new Product;

        $product->fill($request->all());

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->extension();
            $path = $request->file('image')->storeAs('products', uniqid() . '.' . $extension, 'public');
            $product->image = '/storage/' . $path;
        }

        $product->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        if (empty($product)) {
            return redirect()->route('admin.products.index');
        }

        return view('backend.products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'star' => 'required',
            'image' => 'required',
            'price' => 'required|digits_between:0,999999999',
            'category_id' => 'required',
        ], [
            'price.digits_between' => 'Price must greater than 0'
        ]);

        $product = Product::find($id);
        $product->fill($request->all());

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->extension();
            $path = $request->file('image')->storeAs('products', uniqid() . '.' . $extension, 'public');
            $product->image = '/storage/' . $path;
        }

        $product->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Product::destroy($id);
        return redirect()->route('admin.products.index');
    }
}
