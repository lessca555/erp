<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Tian',
                'email' => 'tian@erp.com',
                'password' => Hash::make('12345678'),
                'role' => 'Super Admin'
            ],
            [
                'name' => 'Zaky',
                'email' => 'zaky@erp.com',
                'password' => Hash::make('12345678'),
                'role' => 'Purchasing'
            ],
            [
                'name' => 'Safjar',
                'email' => 'safjar@erp.com',
                'password' => Hash::make('12345678'),
                'role' => 'Project Manager'
            ],
            [
                'name' => 'Nirma',
                'email' => 'nirma@erp.com',
                'password' => Hash::make('12345678'),
                'role' => 'Finance'
            ],
            [
                'name' => 'Gudang',
                'email' => 'wh@erp.com',
                'password' => Hash::make('12345678'),
                'role' => 'Inventory Management'
            ],
        ];

        DB::table('users')->insert($users);

    }
}
