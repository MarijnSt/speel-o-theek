<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new UserRole();
        $user->role = 'User';
        $user->save();

        $admin = new UserRole();
        $admin->role = 'Admin';
        $admin->save();

        $superAdmin = new UserRole();
        $superAdmin->role = 'Super Admin';
        $superAdmin->save();
    }
}
