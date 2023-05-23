<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $new_project = new Project();
            //Mapping
            $new_project->name = $faker->sentence();
            $new_project->description = $faker->text();
            $new_project->owner = $faker->word();
            $new_project->contributors = $faker->word();
            $new_project->languages = $faker->randomElement(['Php', 'Javascript', 'Html & Css', 'MySQL']);
            //Save
            $new_project->save();
        }
    }
}
