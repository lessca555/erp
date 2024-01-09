<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role' => 'Super Admin'],
            ['role' => 'Purchasing'],
            ['role' => 'Project Manager'],
            ['role' => 'Inventory Management'],
            ['role' => 'Finance'],
        ];

        // Menyisipkan data roles ke dalam tabel roles
        DB::table('roles')->insert($roles);
    }
}
