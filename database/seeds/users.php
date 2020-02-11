<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
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
                'name'     => 'Mansouri Sanaa',
                'email'    => 'test@example.com',
                'password' => bcrypt('123456'),
                'role'     => 10,
                'bio'      => $faker->realText(),
            ]);
       
            array_push($data, [
                'name'     => 'Sam',
                'email'    => 'test2@example.com',
                'password' => bcrypt('123456789'),
                'role'     => 0,
                'bio'      => $faker->realText(),
            ]);
        User::insert($data);
    }
}
