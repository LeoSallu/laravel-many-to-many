<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Public','Private','OpenSource'];

        Schema::disableForeignKeyConstraints();
        Type::truncate();

        Schema::enableForeignKeyConstraints();

        foreach($types as $type){
            $newType = new Type();
            $newType->type =$type;
            $newType->save();

        }
    }
}
