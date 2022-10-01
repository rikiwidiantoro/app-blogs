<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view('artikel.index', [
            'articles' => Article::all()
        ]);
    }
    public function create() {
        return view('artikel.tambah');
    }
    public function store(Request $request) {
        // dd($request->all());
        // dd($request->except('_token', 'submit'));
        Article::create($request->except(['_token', 'submit']));
        return redirect('/artikel');
    }
    public function edit($id) {
        // dd($id);
        $datas = Article::find($id);
        // dd($datas);
        return view('artikel.edit', compact(['datas']));
    }
    public function update($id, Request $request) {
        // dd($id);
        $datas = Article::find($id);
        // dd($datas);
        $datas->update($request->except(['_token', 'submit']));
        return redirect('/artikel');
    }
    public function destroy($id) {
        $datas = Article::find($id);
        $datas->delete();
        return redirect('/artikel');
    }
}
