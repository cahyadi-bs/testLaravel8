<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create(); 
        User::create([
            'name' => 'Cahyadi',
            'email' => 'cahyadi@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'Dody',
            'email' => 'dody@gmail.com',
            'password' => bcrypt('1234')
        ]);
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama','category_id' => 3,'slug' => 'judul-pertama','excerpt' => 'Lorem Ipsum Pertama','body' => '<p>ipsum, dolor sit amet consectetur adipisicing elit. Culpa aperiam nostrum fugit sint veniam est odit possimus aliquid deleniti alias placeat iure deserunt accusamus numquam reprehenderit eaque voluptatum eveniet expedita soluta,</p><p>modi porro reiciendis. Est itaque cumque natus quod temporibus ducimus corporis veniam facilis dolorem illum tenetur odio repellat nam eveniet asperiores voluptatibus vitae, at doloribus error quidem quam consectetur provident quia.</p><p>Hic dolorum expedita possimus accusamus eveniet, deleniti laborum saepe libero reiciendis officiis, cupiditate quidem qui deserunt quibusdam accusantium dolor odio, sapiente molestias facere voluptatum reprehenderit eius suscipit. Tempora explicabo nemo earum similique aliquid obcaecati provident a, sequi odio porro cupiditate reprehenderit quibusdam atque quos necessitatibus quo velit modi, nulla enim hic voluptatum aperiam architecto. Aspernatur sapiente natus iure?</p>', 'category_id' => 1, 'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua','category_id' => 3,'slug' => 'judul-kedua','excerpt' => 'Lorem Ipsum Kedua','body' => '<p>ipsum, dolor sit amet consectetur adipisicing elit. Culpa aperiam nostrum fugit sint veniam est odit possimus aliquid deleniti alias placeat iure deserunt accusamus numquam reprehenderit eaque voluptatum eveniet expedita soluta,</p><p>modi porro reiciendis. Est itaque cumque natus quod temporibus ducimus corporis veniam facilis dolorem illum tenetur odio repellat nam eveniet asperiores voluptatibus vitae, at doloribus error quidem quam consectetur provident quia.</p><p>Hic dolorum expedita possimus accusamus eveniet, deleniti laborum saepe libero reiciendis officiis, cupiditate quidem qui deserunt quibusdam accusantium dolor odio, sapiente molestias facere voluptatum reprehenderit eius suscipit. Tempora explicabo nemo earum similique aliquid obcaecati provident a, sequi odio porro cupiditate reprehenderit quibusdam atque quos necessitatibus quo velit modi, nulla enim hic voluptatum aperiam architecto. Aspernatur sapiente natus iure?</p>', 'category_id' => 1, 'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga','category_id' => 3,'slug' => 'judul-ketiga','excerpt' => 'Lorem Ipsum Ketiga','body' => '<p>ipsum, dolor sit amet consectetur adipisicing elit. Culpa aperiam nostrum fugit sint veniam est odit possimus aliquid deleniti alias placeat iure deserunt accusamus numquam reprehenderit eaque voluptatum eveniet expedita soluta,</p><p>modi porro reiciendis. Est itaque cumque natus quod temporibus ducimus corporis veniam facilis dolorem illum tenetur odio repellat nam eveniet asperiores voluptatibus vitae, at doloribus error quidem quam consectetur provident quia.</p><p>Hic dolorum expedita possimus accusamus eveniet, deleniti laborum saepe libero reiciendis officiis, cupiditate quidem qui deserunt quibusdam accusantium dolor odio, sapiente molestias facere voluptatum reprehenderit eius suscipit. Tempora explicabo nemo earum similique aliquid obcaecati provident a, sequi odio porro cupiditate reprehenderit quibusdam atque quos necessitatibus quo velit modi, nulla enim hic voluptatum aperiam architecto. Aspernatur sapiente natus iure?</p>', 'category_id' => 2, 'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat','category_id' => 3,'slug' => 'judul-keempat','excerpt' => 'Lorem Ipsum Keempat','body' => '<p>ipsum, dolor sit amet consectetur adipisicing elit. Culpa aperiam nostrum fugit sint veniam est odit possimus aliquid deleniti alias placeat iure deserunt accusamus numquam reprehenderit eaque voluptatum eveniet expedita soluta,</p><p>modi porro reiciendis. Est itaque cumque natus quod temporibus ducimus corporis veniam facilis dolorem illum tenetur odio repellat nam eveniet asperiores voluptatibus vitae, at doloribus error quidem quam consectetur provident quia.</p><p>Hic dolorum expedita possimus accusamus eveniet, deleniti laborum saepe libero reiciendis officiis, cupiditate quidem qui deserunt quibusdam accusantium dolor odio, sapiente molestias facere voluptatum reprehenderit eius suscipit. Tempora explicabo nemo earum similique aliquid obcaecati provident a, sequi odio porro cupiditate reprehenderit quibusdam atque quos necessitatibus quo velit modi, nulla enim hic voluptatum aperiam architecto. Aspernatur sapiente natus iure?</p>', 'category_id' => 2, 'user_id' => 2
        ]);
    }
}
