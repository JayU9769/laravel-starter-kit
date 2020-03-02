<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->insert([
            [
                'name'              => 'Admin',
                'email'             => 'admin@droplensstudio.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('12345678')
            ],
            [
                'name'              => 'Parmar jay',
                'email'             => 'parmarjaydeep9769@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('12345678')
            ],
            [
                'name'              => 'Chirag mistry',
                'email'             => 'cdmistry97@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('12345678')
            ]
        ]);

        $admins = Admin::query()->get();

        foreach ($admins as $admin) {
            $admin->assignRole('admin');
        }
    }
}
