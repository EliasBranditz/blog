<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder

{
/**
 * Seed the application's database.
 */
public function run(): void
{

$user = User::factory()->create([
    'name' => 'John Doe'
]);

Post::factory(5)->create([
    'user_id' => $user->id
]);

//$user = User::factory()->create();

//$personal = Category::create([
//'name' => 'Personal',
//'slug' => 'personal'
//]);

//$family = Category::create([
//'name' => 'Family',
//'slug' => 'family'
//]);

//$work = Category::create([
//'name' => 'Work',
//'slug' => 'work'
//]);

//Post::create([
//'user_id' => $user->id,
//'category_id' => $family->id,
//'title' => 'My Family Post',
//'slug' => 'my-family-post',
//'excerpt' => '<p>Lorem ipsum dolor sit amet,</p>',
//'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed commodo urna. Nulla interdum consequat mauris quis scelerisque.</p>',
//]);

//Post::create([
//'user_id' => $user->id,
//'category_id' => $personal->id,
//'title' => 'My Personal Post',
//'slug' => 'my-personal-post',
//'excerpt' => '<p>Lorem ipsum dolor sit amet,</p>',
//'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed commodo urna. Nulla interdum consequat mauris quis scelerisque.</p>',
//]);

//Post::create([
//'user_id' => $user->id,
//'category_id' => $work->id,
//'title' => 'My Work Post',
//'slug' => 'my-work-post',
//'excerpt' => '<p>Lorem ipsum dolor sit amet,</p>',
//'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed commodo urna. Nulla interdum consequat mauris quis scelerisque.</p>',
//]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
