<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<7;$i++){
            $new_project= new Project();
            $new_project->name=$faker->sentence(3);
            $new_project->slug=Str::slug($new_project->name,'-');
            $new_project->description=$faker->paragraph(2);;
            $new_project->client=$faker->company();;
            $new_project->save();
        }
    }
}
