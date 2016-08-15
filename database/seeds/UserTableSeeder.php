<?php

use Faker\Generator;
use App\Entities\User;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'first_name' => $faker->name,
            'last_name' => $faker->lastName,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
        ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        $this->create([
            'first_name' => 'Daniel',
            'last_name' => 'Quintero',
            'email' => 'dani.q.h@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}

