<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Taufik Hidayat",
        "email" => "Taufik193019@gmail.com",
        "image" => "Taufik.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Taufik Hidayat",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, vero laudantium tempora at illum dolore quod, dolor quas ratione asperiores sint consectetur. Voluptatibus eos beatae iure porro, ab quaerat exercitationem aspernatur aut, dolorum maiores molestias officiis labore dolores modi maxime culpa. Minus temporibus a nisi ipsum facilis nihil illum corporis fugit quis. Nihil, ipsa error. Earum corrupti quas aliquid accusantium soluta ratione, rem temporibus nulla asperiores est quos dignissimos ipsum dolorum dicta nisi nesciunt doloribus eaque adipisci ducimus veritatis tempore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Herlan nurachman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatem earum mollitia! Velit distinctio, temporibus molestiae consectetur tempora, consequuntur architecto ipsa ipsum id minima qui asperiores deserunt quidem? Animi hic accusantium architecto, modi reiciendis consequuntur ut distinctio, ex quis nam magni ipsam, quae molestiae vero. Doloribus perferendis aspernatur neque ullam dolores repellat expedita officiis ipsam animi, culpa quis nesciunt consequatur ducimus quam iure quia quo, fugit maxime veniam voluptate voluptatum reprehenderit? Ut at architecto inventore, asperiores ullam reiciendis, accusamus iusto quae perspiciatis error iste? Sequi ex similique, nulla excepturi ea quam? Dolorum eum dicta nulla nam eligendi harum a accusantium."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Taufik Hidayat",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, vero laudantium tempora at illum dolore quod, dolor quas ratione asperiores sint consectetur. Voluptatibus eos beatae iure porro, ab quaerat exercitationem aspernatur aut, dolorum maiores molestias officiis labore dolores modi maxime culpa. Minus temporibus a nisi ipsum facilis nihil illum corporis fugit quis. Nihil, ipsa error. Earum corrupti quas aliquid accusantium soluta ratione, rem temporibus nulla asperiores est quos dignissimos ipsum dolorum dicta nisi nesciunt doloribus eaque adipisci ducimus veritatis tempore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Herlan nurachman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatem earum mollitia! Velit distinctio, temporibus molestiae consectetur tempora, consequuntur architecto ipsa ipsum id minima qui asperiores deserunt quidem? Animi hic accusantium architecto, modi reiciendis consequuntur ut distinctio, ex quis nam magni ipsam, quae molestiae vero. Doloribus perferendis aspernatur neque ullam dolores repellat expedita officiis ipsam animi, culpa quis nesciunt consequatur ducimus quam iure quia quo, fugit maxime veniam voluptate voluptatum reprehenderit? Ut at architecto inventore, asperiores ullam reiciendis, accusamus iusto quae perspiciatis error iste? Sequi ex similique, nulla excepturi ea quam? Dolorum eum dicta nulla nam eligendi harum a accusantium."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
