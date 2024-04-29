<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create(['name' => 'ahmed mostafa' , 'username' => 'ahmedmostafa1']);
        $user2 = User::factory()->create(['name' => 'Some One', 'username' => 'someone2']);
        $user3 = User::factory()->create(['name' => 'No One', 'username' => 'noone3']);

        $category = Category::factory()->Create(['name' => 'Family']);
        $category2 = Category::factory()->Create(['name' => 'Work']);
        $category3 = Category::factory()->Create(['name' => 'Personal']);

        Post::factory(3)->create(['user_id' => $user->id, 'category_id' => $category->id]);
        Post::factory(3)->create(['user_id' => $user->id, 'category_id' => $category2->id]);
        Post::factory(3)->create(['user_id' => $user->id, 'category_id' => $category3->id]);

        Post::factory(3)->create(['user_id' => $user2->id, 'category_id' => $category->id]);
        Post::factory(3)->create(['user_id' => $user2->id, 'category_id' => $category2->id]);
        Post::factory(3)->create(['user_id' => $user2->id, 'category_id' => $category3->id]);

        Post::factory(3)->create(['user_id' => $user3->id, 'category_id' => $category->id]);
        Post::factory(3)->create(['user_id' => $user3->id, 'category_id' => $category2->id]);
        Post::factory(3)->create(['user_id' => $user3->id, 'category_id' => $category3->id]);


        //Post::factory(2)->create(['user_id' => 1, 'category_id' => 1]);
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'Personal'
//        ]);
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'Work'
//        ]);
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'Family'
//        ]);
//
//        $user = User::factory()->create();
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => "Family Post 1",
//            'slug' => "family-post-1",
//            'excert' => "What is Lorem Ipsum?",
//            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => "Work Post 1",
//            'slug' => "work-post-1",
//            'excert' => "Why do we use it?",
//            'body' => "it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)",
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => "Personal Post 1",
//            'slug' => "personal-post-1",
//            'excert' => "Where does it come from?",
//            'body' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.",
//        ]);
//
//        $user2 = User::factory()->create();
//
//        Post::create([
//            'user_id' => $user2->id,
//            'category_id' => $family->id,
//            'title' => "Family Post 2",
//            'slug' => "family-post-2",
//            'excert' => "What is Lorem Ipsum?",
//            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
//        ]);
//        Post::create([
//            'user_id' => $user2->id,
//            'category_id' => $work->id,
//            'title' => "Work Post 2",
//            'slug' => "work-post-2",
//            'excert' => "Why do we use it?",
//            'body' => "it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)",
//        ]);
//        Post::create([
//            'user_id' => $user2->id,
//            'category_id' => $personal->id,
//            'title' => "Personal Post 2",
//            'slug' => "personal-post-2",
//            'excert' => "Where does it come from?",
//            'body' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.",
//        ]);
//
//        $user3 = User::factory()->create();
//
//        Post::create([
//            'user_id' => $user3->id,
//            'category_id' => $family->id,
//            'title' => "Family Post 3",
//            'slug' => "family-post-3",
//            'excert' => "What is Lorem Ipsum?",
//            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
//        ]);
//        Post::create([
//            'user_id' => $user3->id,
//            'category_id' => $work->id,
//            'title' => "Work Post 3",
//            'slug' => "work-post-3",
//            'excert' => "Why do we use it?",
//            'body' => "it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)",
//        ]);
//        Post::create([
//            'user_id' => $user3->id,
//            'category_id' => $personal->id,
//            'title' => "Personal Post 3",
//            'slug' => "personal-post-3",
//            'excert' => "Where does it come from?",
//            'body' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.",
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
