<?php

use Illuminate\Database\Seeder;

use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        $data = [];

        $user = App\User::pluck('id');

        for ($i = 1; $i <= 20 ; $i++) {
            array_push($data, [
                'name'     => $faker->name,
                'user_id'    => $faker->randomElement($user),
                'deadline' => $faker->date,
               
            ]);
        }
        
        Project::insert($data);
    }
}
