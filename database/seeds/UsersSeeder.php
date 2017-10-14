<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //Sample admin
        $admin = new User();
        $admin->name = 'Admin Call Me';
        $admin->email = 'admin@call.me';
        $admin->password = bcrypt('tahubulat');
        $admin->save();
        $admin->attachRole($adminRole);

        //Sample member
        $member = new User();
        $member->name = 'Member Call Me';
        $member->email = 'member@callme';
        $member->password = bcrypt('tahubulat');
        $member->save();
        $member->attachRole($memberRole);
    }
}
