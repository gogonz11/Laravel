<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class Post
{
    private static $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"     => "judul-post-pertama",
            "author"    => "Rasheeda Azelia",
            "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quaerat non commodi blanditiis deleniti et nulla quibusdam fuga qui fugit? Maiores atque repellendus suscipit similique assumenda consequatur, odit accusamus neque dolor molestiae autem quis. Ipsam eveniet natus dignissimos aspernatur cum sit. Delectus ut tempore perspiciatis repellendus qui dolor temporibus eveniet. Placeat delectus magni neque soluta voluptas repellat, itaque vero quod aperiam at dolorem amet eveniet laboriosam sit. Laudantium accusantium qui suscipit sapiente saepe porro, doloremque, quis, sit magnam omnis distinctio?"
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"     => "judul-post-kedua",
            "author"    => "Sri Pradono",
            "body"      => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem illo accusantium nihil? Quae, explicabo veniam dolor deleniti facilis possimus quidem enim soluta ducimus? Laudantium officiis, expedita quidem eligendi magni omnis maxime corporis iste ut eius aliquam voluptas quis ea ullam repellendus nobis magnam, quia odit quo quasi laboriosam deleniti alias cupiditate facere. Aspernatur veritatis libero enim hic adipisci nisi at architecto! Deserunt repudiandae corrupti sequi harum quam, alias tempore omnis quod sint et nam atque fugit! Exercitationem facere aperiam mollitia eum cum, deserunt ducimus molestias id, eveniet sed ipsam? Doloremque quasi commodi possimus totam facilis alias magni ratione reiciendis ipsam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
