<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Blane',
                'fname' => 'Dewey',
                'address' => 'Davao',
                'phone' => '09245125',
                'email' => 'Dewey@email.com',
                'password' => bcrypt('Dewey')
            ],
            [
                'id' => 2,
                'lname' => 'Nellie',
                'fname' => 'Arden',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Arden@email.com',
                'password' => bcrypt('Arden41')
            ],
            [
                'id' => 3,
                'lname' => 'Sheridan',
                'fname' => 'Marly',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Sheridan@email.com',
                'password' => bcrypt('Sheridan123')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
