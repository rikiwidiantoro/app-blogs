<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
// Article::create([
//     'title' => 'Judul Pertama',
//     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam magnam molestiae tenetur. Cupiditate quam exercitationem quae laborum doloremque dolores quod?',
//     'image' => 'image1.jpg',
//     'category_id' => 1
// ]);
// Article::create([
//     'title' => 'Judul Kedua',
//     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam magnam molestiae tenetur. Cupiditate quam exercitationem quae laborum doloremque dolores quod? At illum facere libero sequi, quis sit quibusdam minima quisquam voluptate, necessitatibus reiciendis alias qui assumenda consequatur eveniet repudiandae quia unde vitae temporibus rem quidem delectus. Animi dolorum odit qui?',
//     'image' => 'image2.jpg',
//     'category_id' => 1
// ]);
// Category::create([
//     'name' => 'Kategori Satu',
// ]);
// Category::create([
//     'name' => 'Kategori Dua',
// ]);
