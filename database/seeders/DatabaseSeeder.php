<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::create([
            'name' => 'Mochammad Arif P',
            'username' => 'gogonarif',
            'email' => 'gogonarif@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Sri',
        //     'email' => 'sri@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus earum perspiciatis repudiandae dolore blanditiis corporis impedit delectus odit omnis odio at id, hic sit amet eaque minus corrupti alias, expedita deserunt quibusdam illum consequuntur iure! Harum perferendis alias similique! Rerum, facilis! Voluptatibus esse nesciunt at odit? Voluptatum eligendi in dignissimos a, vitae ab? Quae aspernatur incidunt voluptas labore voluptatibus illum alias eaque delectus officia, deleniti ea, vero quaerat suscipit iste, at minima voluptatem. Eos, ipsam qui, atque non repellat quos labore consequuntur incidunt et maxime quasi earum aspernatur deleniti sed perferendis eius sapiente consectetur, repudiandae vitae eveniet cupiditate porro illo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus earum perspiciatis repudiandae dolore blanditiis corporis impedit delectus odit omnis odio at id, hic sit amet eaque minus corrupti alias, expedita deserunt quibusdam illum consequuntur iure! Harum perferendis alias similique! Rerum, facilis! Voluptatibus esse nesciunt at odit? Voluptatum eligendi in dignissimos a, vitae ab? Quae aspernatur incidunt voluptas labore voluptatibus illum alias eaque delectus officia, deleniti ea, vero quaerat suscipit iste, at minima voluptatem. Eos, ipsam qui, atque non repellat quos labore consequuntur incidunt et maxime quasi earum aspernatur deleniti sed perferendis eius sapiente consectetur, repudiandae vitae eveniet cupiditate porro illo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus earum perspiciatis repudiandae dolore blanditiis corporis impedit delectus odit omnis odio at id, hic sit amet eaque minus corrupti alias, expedita deserunt quibusdam illum consequuntur iure! Harum perferendis alias similique! Rerum, facilis! Voluptatibus esse nesciunt at odit? Voluptatum eligendi in dignissimos a, vitae ab? Quae aspernatur incidunt voluptas labore voluptatibus illum alias eaque delectus officia, deleniti ea, vero quaerat suscipit iste, at minima voluptatem. Eos, ipsam qui, atque non repellat quos labore consequuntur incidunt et maxime quasi earum aspernatur deleniti sed perferendis eius sapiente consectetur, repudiandae vitae eveniet cupiditate porro illo.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus earum perspiciatis repudiandae dolore blanditiis corporis impedit delectus odit omnis odio at id, hic sit amet eaque minus corrupti alias, expedita deserunt quibusdam illum consequuntur iure! Harum perferendis alias similique! Rerum, facilis! Voluptatibus esse nesciunt at odit? Voluptatum eligendi in dignissimos a, vitae ab? Quae aspernatur incidunt voluptas labore voluptatibus illum alias eaque delectus officia, deleniti ea, vero quaerat suscipit iste, at minima voluptatem. Eos, ipsam qui, atque non repellat quos labore consequuntur incidunt et maxime quasi earum aspernatur deleniti sed perferendis eius sapiente consectetur, repudiandae vitae eveniet cupiditate porro illo.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
