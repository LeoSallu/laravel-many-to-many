<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML5','CSS','JS','PHP','MYSQL','LARAVEL','SASS'];

        Schema::disableForeignKeyConstraints();
        Technology::truncate();
        Schema::enableForeignKeyConstraints();


        foreach ($technologies as $technology) {

            $new_technology = new Technology();
            $new_technology->name = $technology;
            $new_technology->save();

        }
}
}
