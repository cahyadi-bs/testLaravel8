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
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        "name" => "Cahyadi",
        "email" => "cahyadi@gmail.com",
        "img" => "xiao.jpg"
    ]);
});


Route::get('/posts', function () {
    $blogPost = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Cahyadi",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit assumenda suscipit et sit repudiandae quae perferendis eius delectus unde placeat? Iste officia totam harum voluptas praesentium quae, explicabo deserunt nulla enim perspiciatis omnis voluptatum atque, maxime aperiam esse quam expedita laboriosam maiores nisi nihil veritatis aspernatur! Animi dolores quis ex voluptates neque cum magnam consequatur ab totam laborum ducimus, odio libero quos, quod amet corrupti quibusdam laudantium nesciunt repellendus quidem fuga sed. Hic iusto alias suscipit delectus quaerat nemo modi."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Donny",
            "body"=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, voluptatem vel! Illo, cupiditate reiciendis. Magni corrupti debitis cumque consectetur quidem?"
        ],
    ];
    return view('posts',[
        'title' => 'Posts',
        'posts' => $blogPost
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blogPost = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Cahyadi",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit assumenda suscipit et sit repudiandae quae perferendis eius delectus unde placeat? Iste officia totam harum voluptas praesentium quae, explicabo deserunt nulla enim perspiciatis omnis voluptatum atque, maxime aperiam esse quam expedita laboriosam maiores nisi nihil veritatis aspernatur! Animi dolores quis ex voluptates neque cum magnam consequatur ab totam laborum ducimus, odio libero quos, quod amet corrupti quibusdam laudantium nesciunt repellendus quidem fuga sed. Hic iusto alias suscipit delectus quaerat nemo modi."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Donny",
            "body"=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, voluptatem vel! Illo, cupiditate reiciendis. Magni corrupti debitis cumque consectetur quidem?"
        ],
    ];

    $single = [];
    foreach ($blogPost as $post) {
        if ($post["slug"] === $slug) {
            $single = $post;
        }
    }
    return view('post',[
        'title' => 'Single Post',
        'post' => $single
    ]);
});
