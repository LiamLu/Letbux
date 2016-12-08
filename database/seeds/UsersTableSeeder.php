<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = factory('App\User')->create([
            'name' => 'LiamLu',
            'email' => 'liam.lu@outlook.com',
            'password' => bcrypt('04040332'),
            'username' => '鲁',
        ]);
        $users = factory('App\User',5)->create();
        
    }
}
