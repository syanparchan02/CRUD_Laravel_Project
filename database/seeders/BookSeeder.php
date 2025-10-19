<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=\Faker\Factory::create();
        for($i=1;$i<=10;$i++){
            Book::create([
                'name'=>$faker->name,
                'author'=>$faker->name,
                'detail' => $faker->sentence,

            ]);
        }
        
    }
}
