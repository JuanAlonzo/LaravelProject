<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Form;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::inRandomOrder()->take(6)->get();
        $featuredForms = Form::orderBy('id')->take(5)->get();

        return view('dashboard', [
            'categories' => Category::all(),
            'products' => Product::all(),
            'user' => Auth::user(),
            'featuredProducts' => $featuredProducts,
            'featuredForms' => $featuredForms,
        ]);
    }

    // To modify and add to principal page...

    public function product($idproduct)
    {
        $product = Product::find($idproduct);

        $latestProduct = Product::orderBy('id', 'DESC')->take(3)->get();

        return view('post', [
            'post' => $product,
            'latestPost' => $latestProduct,
        ]);
    }

    //To modify

    public function productByCategory($category)
    {
        // Obtiene una categoria
        $category = Category::where('name', '=', $category)->first();

        //Frontend
        $categoryIdSelected = $category->id;

        // Obtiene todos los productos de esa categoria
        $products = Product::where('category_id', '=', $categoryIdSelected)->get();
        return view('posts', [
            'categories' => Category::all(),
            'products' => $products, //concatenado a la variable
            'categoryIdSelected' => $categoryIdSelected
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
