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
                'lname' => 'Cruz',
                'fname' => 'Mar',
                'address' => 'Cebu',
                'phone' => '09245125',
                'email' => 'crusz@email.com',
                'password' => bcrypt('paswrd421')
            ],
            [
                'id' => 2,
                'lname' => 'Caarrryy',
                'fname' => 'Stephen',
                'address' => 'USA',
                'phone' => '02144124',
                'email' => 'step@email.com',
                'password' => bcrypt('step_123')
            ],
            [
                'id' => 3,
                'lname' => 'Lebron',
                'fname' => 'Jamessss',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Lebron@email.com',
                'password' => bcrypt('Lebron_124')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
