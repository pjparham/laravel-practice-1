<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();
        
        $travel = Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);
        
        $tech = Category::create([
            'name' => 'Tech',
            'slug' => 'tech'
        ]);

        $food= Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $travel->id,
            'title' => 'The Journey Begins',
            'excerpt' => 'Embarking on a new adventure...',
            'slug' => Str::slug('The Journey Begins'),
            'body' => 'Today marks the start of a thrilling journey filled with excitement and uncertainty. As I step into the unknown, I am reminded of the countless possibilities that lie ahead. With a backpack on my shoulders and a heart full of dreams, I\'m ready to explore the world and create memories that will last a lifetime.'
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $travel->id,
            'title' => 'Exploring Nature',
            'excerpt' => 'A day in the wilderness...',
            'slug' => Str::slug('Exploring Nature'),
            'body' => 'There\'s something magical about spending a day in the heart of nature. The rustling of leaves in the breeze, the gentle babble of a nearby stream, and the chirping of birds create a symphony of serenity. As I hike through the lush forests and gaze upon breathtaking vistas, I am reminded of the beauty and wonder that surround us.'
        ]);
 
        Post::create([
            'user_id' => $user->id,
            'category_id' => $tech->id,
            'title' => 'Tech Trends 2023',
            'excerpt' => 'The latest in technology innovations...',
            'slug' => Str::slug('Tech Trends 2023'),
            'body' => 'In the ever-evolving world of technology, 2023 promises to be a groundbreaking year. From the rise of artificial intelligence and augmented reality to the development of sustainable energy solutions, the tech landscape is on the verge of transformation. Join me as we explore the trends and innovations that will shape our future.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $food->id,
            'title' => 'Delicious Recipes',
            'excerpt' => 'Cooking up culinary delights...',
            'slug' => Str::slug('Delicious Recipes'),
            'body' => 'There\'s nothing quite like the joy of creating delicious meals in the kitchen. From aromatic spices to fresh ingredients, cooking is an art that brings people together. In this blog, I will share some of my favorite recipes and culinary adventures. Get ready to embark on a gastronomic journey filled with flavors, techniques, and culinary inspiration.'
        ]);


    }
}
