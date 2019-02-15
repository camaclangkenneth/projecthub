<?php

namespace App\Modules\Project\Database\Seeds;

use DB;
use Illuminate\Database\Seeder;

class ProjectDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few projects in our database:
        for ($i = 0; $i < 50; $i++) {
            DB::table('projects')->insert([
                'title' => $faker->sentence(1),
                'description' => $faker->paragraph(3),
                'status' => 'On Going',
                'deadline' => now()->addMonths(3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
