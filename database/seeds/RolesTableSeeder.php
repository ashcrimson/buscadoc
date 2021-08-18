<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role:: create(['name' => 'superAdmin']);
        Role:: create(['name' => 'adminCentro']);
        Role:: create(['name' => 'secretariaCentro']);
        Role:: create(['name' => 'paciente']);
    }
}
