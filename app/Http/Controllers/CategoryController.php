<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Database\QueryException;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('categories.index', [
            'categories' => Category::with('user')
                ->latest()
                ->paginate(7),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|min:6',
        ]);

        $request->user()->categories()->create($validated);

        return redirect(route('categories.index'))->with('status', 'category-created');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category): View
    {
        $this->authorize('update', $category);

        return view('categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $this->authorize('update', $category);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($validated);

        return redirect(route('categories.index'))->with('status', 'category-updated');
    }

    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);

        try {
            $category->delete();
            return redirect(route('categories.index'))->with('status', 'category-deleted');
        } catch (QueryException $e) {
            return redirect(route('categories.index'))->with('error', 'No se puede eliminar la categoría porque está relacionada con uno o más productos.');
        }

        // $category->delete();

        // return redirect(route('categories.index'));
    }
}
