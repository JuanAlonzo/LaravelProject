<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        return view('products.index', [
            'products' => Product::latest()->paginate(5),
            'categories' => Category::all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $producto = new Product();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'images/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($destinationPath, $filename);
            $producto->image = $destinationPath . $filename;
        }

        $producto->name = $request->name;
        $producto->category_id = $request->category_id;
        $producto->price = $request->price;
        $producto->description = $request->description;
        $producto->state = $request->state;

        $producto->save();

        return redirect(route('products.index'))->with('status', 'product-created');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $updateproduct = Product::find($product->id);

        $updateproduct->name = $request->name;
        $updateproduct->category_id = $request->category_id;
        $updateproduct->price = $request->price;
        $updateproduct->description = $request->description;
        $updateproduct->state = $request->state;

        if ($request->hasFile('image')) {
            File::delete($updateproduct->image);
            $file = $request->file('image');
            $destinationPath = 'images/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $updateproduct->image = $destinationPath . $filename;
        }

        $updateproduct->save();

        return redirect(route('products.index'))->with('status', 'product-updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('status', 'product-deleted');
    }
}
