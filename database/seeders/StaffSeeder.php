<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new Staff;
        $staff->name = 'admin';
        $staff->email = 'admin@yahoo.com';
        $staff->type = 'manager';
        $staff->password = bcrypt('Admin2023');

        $staff->save();
    }
}
