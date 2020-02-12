<?php

use Illuminate\Database\Seeder;
use App\Label;

class LabelSeeder extends Seeder
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
        
       
            array_push($data, [
                'name'     => 'Urgent',
                'color'    => 'badge-danger',
               
                ]);
            array_push($data, [
                'name'     => 'Warning',
                'color'    => 'badge-warning',
               
            ]);
           
            array_push($data, [
                'name'     => 'Support',
                'color'    => 'badge-success',
               
            ]);
            array_push($data, [
                'name'     => 'Dev',
                'color'    => 'badge-info',
               
            ]);
           
       Label::insert($data);

     /*  $task = App\Task::pluck('id');
       $label = App\Label::pluck('id');

       for ($i = 1; $i <= 10 ; $i++) {
           array_push($data, [
               'task_id'    => $faker->randomElement($task),
               'label_id'    => $faker->randomElement($label),
           
           ]);
       }
       
       Label_task::insert($data);*/

    }
}
