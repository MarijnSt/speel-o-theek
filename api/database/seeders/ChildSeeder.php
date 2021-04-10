<?php

namespace Database\Seeders;

use App\Models\Child;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $child = new Child();
        $child->family_id = 1;
        $child->lastName = 'Stammeleer';
        $child->firstName = 'Tuur';
        $child->dateOfBirth = Carbon::parse('2020-05-20');
        $child->gender = 'boy';
        $child->save();
    }
}
