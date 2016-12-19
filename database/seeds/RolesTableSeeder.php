<?php

use Illuminate\Database\Seeder;
use App\Model\Permission;
use App\Model\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //name	display_name	description
         $array = array(
            array("Admin","管理员","管理员"),
            array("Common","普通用户","普通用户"),            
        );                     
        $admin = new Role();
        $admin->name = $array[0][0];
        $admin->display_name = $array[0][1];
        $admin->description = $array[0][2];
        $admin->save();

        $common = new Role();
        $common->name = $array[1][0];
        $common->display_name = $array[1][1];
        $common->description = $array[1][2];
        $common->save();        

        $allpermission = array_column(Permission::all()->toArray(),'id');
        $admin->perms()->sync($allpermission);
        //$owner->attachPermissions(Permission::all()->toArray());

        $commonpermission = Permission::where('name','create_user')->first();
        $common->perms()->sync(array($commonpermission->id));
        //$common->attachPermissions($commonpermission);        
    }
}
