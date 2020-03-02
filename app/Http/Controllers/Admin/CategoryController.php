<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param CategoryDataTable $dataTable
     * @return Factory|View
     */
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('Admin.Categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('Admin.Categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $category = Category::query()->create($request->all());

        if (isset($request['icon'])) {
            $category->addMediaFromRequest('icon')->toMediaCollection('icon_images');
        }

        return redirect()->route('category.index')->with('success', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $slug
     * @return View
     */
    public function edit($slug): View
    {
        $category = Category::findBySlugOrFail($slug);

        return view('Admin.Categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param $slug
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, $slug): RedirectResponse
    {
        $category = Category::findBySlugOrFail($slug);

        $category->fill($request->all())->update();

        return redirect()->route('category.index')->with('success', 'Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $slug
     * @return RedirectResponse
     */
    public function destroy($slug): RedirectResponse
    {
        $category = Category::query()->findBySlugOrFail($slug);

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category has been deleted successfully');
    }
}
