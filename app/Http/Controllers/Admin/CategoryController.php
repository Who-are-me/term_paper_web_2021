<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $categories = Category::orderBy('created_at', 'desc')->get();

        //$cat = DB::table('categories')->paginate(20);
        $cat = Category::simplePaginate(10);

        // return view('admin.category.index', [
        //     'categories' => $categories,
        //     'cat' => $cat
        // ]);

        return view('admin.category.index', [
            'categories' => $categories,
        ], compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $new_category = new Category();
        $new_category->title = $request->title;
        $new_category->save();

        return redirect()->back()->withSuccess('Категорія була успішно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category) {

        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Category $category) {

        $category->title = $request->title;
        $category->save();

        return redirect()->back()->withSuccess('Категорія була успішно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category) {
        
        $tmp_title = $category->title;
        $category->delete();

        return redirect()->back()->withSuccess("Категорія [$tmp_title] була успішно видалена!");
    }
}
