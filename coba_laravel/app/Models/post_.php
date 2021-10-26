<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Taufik Hidayat",
      "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, vero laudantium tempora at illum dolore quod, dolor quas ratione asperiores sint consectetur. Voluptatibus eos beatae iure porro, ab quaerat exercitationem aspernatur aut, dolorum maiores molestias officiis labore dolores modi maxime culpa. Minus temporibus a nisi ipsum facilis nihil illum corporis fugit quis. Nihil, ipsa error. Earum corrupti quas aliquid accusantium soluta ratione, rem temporibus nulla asperiores est quos dignissimos ipsum dolorum dicta nisi nesciunt doloribus eaque adipisci ducimus veritatis tempore."
    ],
    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Herlan Nurachan",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatem earum mollitia! Velit distinctio, temporibus molestiae consectetur tempora, consequuntur architecto ipsa ipsum id minima qui asperiores deserunt quidem? Animi hic accusantium architecto, modi reiciendis consequuntur ut distinctio, ex quis nam magni ipsam, quae molestiae vero. Doloribus perferendis aspernatur neque ullam dolores repellat expedita officiis ipsam animi, culpa quis nesciunt consequatur ducimus quam iure quia quo, fugit maxime veniam voluptate voluptatum reprehenderit? Ut at architecto inventore, asperiores ullam reiciendis, accusamus iusto quae perspiciatis error iste? Sequi ex similique, nulla excepturi ea quam? Dolorum eum dicta nulla nam eligendi harum a accusantium."
    ],
  ];

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find($slug)
  {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
  }
}
