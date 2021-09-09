<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blogPost = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Bayu",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit assumenda suscipit et sit repudiandae quae perferendis eius delectus unde placeat? Iste officia totam harum voluptas praesentium quae, explicabo deserunt nulla enim perspiciatis omnis voluptatum atque, maxime aperiam esse quam expedita laboriosam maiores nisi nihil veritatis aspernatur! Animi dolores quis ex voluptates neque cum magnam consequatur ab totam laborum ducimus, odio libero quos, quod amet corrupti quibusdam laudantium nesciunt repellendus quidem fuga sed. Hic iusto alias suscipit delectus quaerat nemo modi."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Donny",
            "body"=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, voluptatem vel! Illo, cupiditate reiciendis. Magni corrupti debitis cumque consectetur quidem?"
        ],
    ];

    public static function All(){
        return collect(self::$blogPost);
    }

    public static function find($slug){
        $posts = static::All();
        return $posts->firstWhere('slug',$slug);
    }
}
