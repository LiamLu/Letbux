<?php

use Illuminate\Database\Seeder;
use App\Model\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name','Admin')->first();
        $commonRole = Role::where('name','Common')->first();
        $admin = factory('App\User')->create([
            'name' => 'LiamLu',
            'email' => 'liam.lu@outlook.com',
            'password' => bcrypt('04040332'),
            'username' => '鲁',
        ])->attachRole($adminRole);

        $users = factory('App\User',5)->create();
        $users->each(function($u) use($commonRole){
            $u->roles()->attach($commonRole->id);
        });
    }
}
