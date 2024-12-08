<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all() 
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Fikri Akbar Pratama',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, facere. Neque incidunt nisi esse expedita. Amet eveniet quia ipsum, earum nesciunt iure, labore ea mollitia atque quasi quidem? Explicabo at hic sunt pariatur nihil atque doloremque sint numquam ab voluptas aliquam dolores quae dolorum, illo corporis ipsum minus architecto iure?',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Fikri Akbar Pratama',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id facere unde natus culpa. Maiores corporis inventore aspernatur neque vel, hic nostrum sapiente tempora incidunt iusto id corrupti laudantium itaque sit eligendi. Eum asperiores maxime nobis repudiandae, nesciunt voluptas quisquam placeat.'
            ]
        ];
    }

    public static function find($slug): Array 
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // menggunakan arrow function | lebih singkat
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        // apabila slug yang dicari tidak ditemukan, maka akan menghasilkan halaman error 404
        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
