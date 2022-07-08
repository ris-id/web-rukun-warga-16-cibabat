<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = [
        //     [
        //         'name' => 'Admin RW 16',
        //         'email' => 'alianhakim8@gmail.com',
        //         'is_admin' => 1,
        //         'password' => Hash::make('adminrw16123321'),
        //     ],
        //     [
        //         'name' => 'User',
        //         'email' => 'user@gmail.com',
        //         'is_admin' => '0',
        //         'password' => bcrypt('12345678'),
        //     ],
        // ];

        $admin = [
            [
                'name' => 'Admin RW 16',
                'email' => 'adminrw16@gmail.com',
                'is_admin' => 1,
                'password' => Hash::make('sisrw16admin123'),
            ],
        ];

        DB::table('users')->insert($admin);

        // foreach ($user as $key => $value) {
        //     User::create($value);
        // }
    }
}
