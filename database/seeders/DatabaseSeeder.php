<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Riki Widiantoro',
            'email' => 'qwerty@aa.com',
            'password' => bcrypt('qwertyuiop')
        ]);
        Article::factory(4)->create();
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
        // Article::create([
        //     'title' => 'Judul Ketiga',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam magnam molestiae tenetur. Cupiditate quam exercitationem quae laborum doloremque dolores quod? At illum facere libero sequi, quis sit quibusdam minima quisquam voluptate, necessitatibus reiciendis alias qui assumenda consequatur eveniet repudiandae quia unde vitae temporibus rem quidem delectus. Animi dolorum odit qui?',
        //     'image' => 'image3.jpg',
        //     'category_id' => 2
        // ]);
        Category::create([
            'name' => 'Kategori Satu',
        ]);
        Category::create([
            'name' => 'Kategori Dua',
        ]);
    }
}
