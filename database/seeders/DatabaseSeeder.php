<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


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
            'name' => 'Julkarnain lubis A.Md.Kom',
            'username' => 'Julkarnain lubis A.Md.Kom',
            'email' => 'julzain@outlook.com',
            'password' => bcrypt('creator'),
            'is_admin' => '1'
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'keterangan' => 'web-Programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'keterangan' => 'web-Design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            'keterangan' => 'Personal'
        ]);

        Post::factory(15)->create();

    }
}
