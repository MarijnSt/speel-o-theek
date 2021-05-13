<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->user_role_id = 3;
        $user->lastName = 'Stammeleer';
        $user->firstName = 'Marijn';
        $user->mobilePhone = '0496112233';
        $user->fixedPhone = '053112233';
        $user->email = 'marijn.stammeleer@gmail.com';
        $user->password = Hash::make('password');
        $user->street = 'Fakestreet';
        $user->houseNumber = 1;
        $user->box = '1a';
        $user->postalCode = 9300;
        $user->city = 'Oelsjt';
        $user->uitPas = false;
        // $user->paymentReceived = date('Y-m-d H:i:s');
        $user->save();
    }
}
