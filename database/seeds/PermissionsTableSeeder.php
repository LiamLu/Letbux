<?php

use Illuminate\Database\Seeder;
use App\Model\Permission;

class PermissionsTableSeeder extends Seeder
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
            array("create_user","创建用户","创建用户"),
            array("edit_user","编辑用户","编辑用户"),
            array("remove_user","删除用户","删除用户"),
            array("ban_user","限制用户","限制用户"),
        );
        foreach ($array as $val) {
            $permission = new Permission();
            $permission->name = $val[0];
            $permission->display_name = $val[1];
            $permission->description = $val[2];
            $permission->save();
        }
    }
}
