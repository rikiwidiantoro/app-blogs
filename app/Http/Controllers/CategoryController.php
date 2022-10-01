<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('kategori.index', [
            'categories' => Category::all()
        ]);
    }
    public function create() {
        return view('kategori.tambah');
    }
    public function store(Request $request) {
        // dd($request->all());
        // dd($request->except('_token', 'submit'));
        Category::create($request->except(['_token', 'submit']));
        return redirect('/kategori');
    }
    public function edit($id) {
        // dd($id);
        $datas = Category::find($id);
        // dd($datas);
        return view('kategori.edit', compact(['datas']));
    }
    public function update($id, Request $request) {
        // dd($id);
        $datas = Category::find($id);
        // dd($datas);
        $datas->update($request->except(['_token', 'submit']));
        return redirect('/kategori');
    }
    public function destroy($id) {
        $datas = Category::find($id);
        $datas->delete();
        return redirect('/kategori');
    }
}
