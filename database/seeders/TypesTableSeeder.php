<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = ["laravel", "vue", "php", "js", "html", "css", "bootstrap", "tailwind", "sass", "jquery"];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->nome = rand(1, 10);
            $newType->descrizione = $faker->text(200);

            $newType->save();
        }
             
    }
}
