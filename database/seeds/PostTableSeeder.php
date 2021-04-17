<?php

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name'=>'News'
        ]);

        $category2 = Category::create([
            'name'=>'Desing'
        ]);
        $category3 = Category::create([
            'name'=>'Partnership'
        ]);

        $author1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('password')
        ]);

        $author2 = User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@doe.com',
            'password' => Hash::make('password')
        ]);
        

        $post1 = $author2->posts()->create([
            'title' => 'We relocated our office to a new designed garage',
            'description'=> 'desc',
            'content'=> 'We relocated our office to a new designed garage',
            'category_id' => $category1->id,
            'image'=> 'posts/6.jpg'
        ]);

        $post2 = $author1->posts()->create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description'=> 'desc',
            'content'=> 'Top 5 brilliant content marketing strategies',
            'category_id' => $category2->id,
            'image'=> 'posts/7.jpg'
        ]);

        $post3 = $author2->posts()->create([
            'title' => 'Best practices for minimalist design with example',
            'description'=> 'desc',
            'content'=> 'Best practices for minimalist design with example',
            'category_id' => $category3->id,
            'image'=> 'posts/8.jpg'
        ]);

        $post4 = $author1->posts()->create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description'=> 'desc',
            'content'=> 'Congratulate and thank to Maryam for joining our team',
            'category_id' => $category2->id,
            'image'=> 'posts/9.jpg'
        ]);

        $tag1 = Tag::create([
            'name'=>'job'
        ]);

        $tag2 = Tag::create([
            'name'=>'customers'
        ]);

        $tag3 = Tag::create([
            'name'=>'record'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);
        $post4->tags()->attach([$tag1->id, $tag2->id]);
    }
}
