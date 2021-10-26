<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@forsalebyweb.com',
                'password' => bcrypt('demo'),
                'role' => 'superAdmin',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@forsalebyweb.com',
                'password' => bcrypt('demo'),
                'role' => 'admin',
            ],
            [
                'name' => 'Worker',
                'email' => 'worker@forsalebyweb.com',
                'password' => bcrypt('demo'),
                'role' => 'worker',
            ],
            [
                'name' => 'Client',
                'email' => 'client@forsalebyweb.com',
                'password' => bcrypt('demo'),
                'role' => 'client',
            ],
        ]);
    }
}
