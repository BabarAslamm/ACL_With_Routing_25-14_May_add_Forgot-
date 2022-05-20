<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call('Insyghts\Authentication\Seeders\RolesTableDataSeeder');
        $this->call('Insyghts\Authentication\Seeders\PermissionsTableDataSeeder');
        $this->call('Insyghts\Authentication\Seeders\RolePermissionsTableDataSeeder');
        $this->call('Insyghts\Authentication\Seeders\RoleUsersTableDataSeeder');
    }
}
