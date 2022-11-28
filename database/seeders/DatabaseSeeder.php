<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // When you run PostFactory it runs UserFactory and CategoryFactory automatically to generate a random category & randomuser that is why you do not need to run it seprately.

        $user = User::factory()->create([
            'name'=> 'John Doe'
        ]);

        // Post::factory(15)->create();

        Post::factory(15)->create([
            'user_id'=> $user->id
        ]);

        // $work = Category::create([
        //     'name'=> 'Work',
        //     'slug'=> 'work'
        // ]);


        // Post::create([
        //     'user_id'=> $user->id,
        //     'category_id'=> $personal->id,
        //     'title'=>'My personal Post',
        //     'slug'=>'my-third-post',
        //     'excerpt'=>'This is a post in personal Category',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid molestias incidunt asperiores similique? Minus odio iste sint enim, veniam odit vero suscipit optio maxime libero error neque. Natus ut tempore tempora provident expedita tenetur, alias ex! Dicta nam optio officiis nisi, veniam reiciendis veritatis dolores ut soluta quae numquam deserunt.'
        // ]);
    }
}
