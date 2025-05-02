<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
   
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {

            $newProject = new Project();
            $newProject->name = $faker->name();
            $newProject->nome_cliente = $faker->name();
            $newProject->periodo = $faker->date();
            $newProject->type_id = rand(1, 10); 
            $newProject->riasunto = $faker->text(200);

            // salvo il progetto
            $newProject->save();
        } 
    }
}
