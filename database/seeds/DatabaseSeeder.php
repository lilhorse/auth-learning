<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = \Faker\Factory::create();
        User::create([
            'name' => $faker->name(),
            'email' => $faker->email,
            'password' => bcrypt('password'),
            'remember_token' => str_random(10),
        ]);
        echo 'add user success';
    }
}
