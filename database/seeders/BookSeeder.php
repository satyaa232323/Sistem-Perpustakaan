<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     *
     *
     * @return void
     */

    public function run()
    {
        Book::create([
            'title'=> "The lord of rings",
            'author'=> "J. R. R. Tolkien",
            'publisher'=> "Allen & uwin",
            'year'=> "1954",
            'isbn'=> "978-0-4-823993",
            'cover'=> "https://th.bing.com/th/id/OIP.B5g1bENY6QYhDe0czY9w5AHaHa?w=185&h=185&c=7&r=0&o=5&dpr=1.4&pid=1.7",
            'description'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptatem omnis blanditiis sint aliquam numquam corporis! Quod nulla asperiores vel!",
            'category'=> "Fantasy",

        ]);
    }
}
