<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->truncate();

        $superadminRole = Role::where('name', 'Superadmin')->first();
        $admincentroRole = Role::where('name', 'AdminCentro')->first();
        $secretariacentroRole = Role::where('name', 'SecretariaCentro')->first();
        $pacienteRole = Role::where('name', 'Paciente')->first();

        $superadmin = User::create([
        	'name' => 'SuperAdmin User',
        	'email' => 'Superadmin@mail.com',
        	'password' => Hash::make('SuperAdmin')
        ]);

        $admincentro = User::create([
        	'name' => 'AdminCentro User',
        	'email' => 'AdminCentro@mail.com',
        	'password' => Hash::make('AdminCentro')
        ]);

        $secretariacentro = User::create([
        	'name' => 'SecretariaCentro User',
        	'email' => 'secretariaCentro@mail.com',
        	'password' => Hash::make('SecretariaCentro')
        ]);

        $paciente = User::create([
        	'name' => 'Paciente User',
        	'email' => 'Paciente@mail.com',
        	'password' => Hash::make('Paciente')
        ]);

        $superadmin->Roles()->attach($superadminRole);
        $admincentro->Roles()->attach($admincentroRole);
        $secretariacentro->Roles()->attach($secretariacentroRole);
        $paciente->Roles()->attach($pacienteRole);
    }
}