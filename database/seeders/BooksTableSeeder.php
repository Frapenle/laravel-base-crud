<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newBook = new Book();
            $newBook->cover = $faker->imageUrl(640, 480, 'books');
            $newBook->title = $faker->realTextBetween(5, 20);
            $newBook->author = $faker->firstName() . ' ' . $faker->lastName();
            $newBook->ISBN = $faker->isbn13();
            $newBook->genre = $faker->randomElement(['romance', 'thriller', 'horror', 'mystery', 'fantasy', 'biography', 'history']);
            $newBook->release_date = $faker->date();
            $newBook->description = $faker->paragraph();
            $newBook->save();
        }
    }
}
