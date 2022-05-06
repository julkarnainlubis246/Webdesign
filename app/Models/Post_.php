<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
    private static $blog_posts = [
                [
                    "title" => "test blog",
                    "slug" => "test-blog",
                    "author" => "sandi",
                    "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur aliquid aperiam est aliquam quae maxime autem natus distinctio itaque voluptatum odit odio fuga quisquam debitis fugit ullam molestiae veritatis dolor, consequatur sed. Repudiandae molestias velit aliquid! Quod maxime commodi eum? Dolorem praesentium, tempora, assumenda deserunt amet quia vero, aliquid temporibus velit inventore dolorum quasi mollitia voluptates? Nam perferendis rerum aliquid, deleniti similique quas numquam maxime, libero fuga et iste ipsa neque? Debitis atque earum voluptatem rerum pariatur nostrum. Eos, quasi!"
                ],
                [
                    "title" => "test blog 2",
                    "slug" => "test-blog-2",
                    "author" => "sandi 2",
                    "body" => "Lorem ipsum 2 dolor, sit amet consectetur adipisicing elit. Consequuntur aliquid aperiam est aliquam quae maxime autem natus voluptates? Nam perferendis rerum aliquid, deleniti similique quas numquam maxime, libero fuga et iste ipsa neque? Debitis atque earum voluptatem rerum pariatur nostrum. Eos, quasi!"
                ]
            ]; 


    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p){
            if($p["slug"] === $slug){
                $post = $p;
            }
        }

        return $post;
    }



}

