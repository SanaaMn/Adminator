<?php

use Illuminate\Database\Seeder;
use App\Task;
class TaskSeeder extends Seeder
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
        $projects = App\Project::pluck('id');

        for ($i = 1; $i <= 30 ; $i++) {
            array_push($data, [
                'name'     => $faker->name,
                'user_id'    => $faker->randomElement($user),
                'project_id'    => $faker->randomElement($projects),
                'deadline' => $faker->date,
                'status' => $faker->boolean,
               
            ]);
        }
        
        Task::insert($data);
    }
}
