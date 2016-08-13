<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmin();
        $this->createUsers(50);

    }

    private function createAdmin(){
        User::create([
            'first_name'=>'Daniel',
            'last_name'=>'Quintero',
            'email'=>'dani.q.h@gmail.com',
            'password'=>bcrypt('admin'),
          // 'role'=>'admin'
        ]);
    }

    private function createUsers($total)
    {
        $faker = Faker::create();

        for ($i = 1; $i <= $total; $i++) {
            User::create([
                'first_name' => $faker->name,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('secret')
            ]);
        }
    }
}


