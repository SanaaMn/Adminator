<?php

use Illuminate\Database\Seeder;
use App\Label_task;
class LabelTaskSeeder extends Seeder
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
    
        $task = App\Task::pluck('id');
        $label = App\Label::pluck('id');
    
        for ($i = 1; $i <= 40 ; $i++) {
            array_push($data, [
                'task_id'    => $faker->randomElement($task),
                'label_id'    => $faker->randomElement($label),
            
            ]);
        }
        
        Label_task::insert($data);
    }
}
