<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //criando Perfil
        Role::create(['name' => 'Super Administrador']);

        //Criando Usuario Super Administrador
        $user = \App\Models\User::factory()->create([
            'name' => 'Claudino Mil Homens de Moraes',
            'dob' => '1971-06-02',
            'email' => 'claudinomoraes@yahoo.com.br',
            'password' => Hash::make('claudino1971'),
            'email_verified_at'=>'2022-06-02 12:00:00',
            'avatar' => '/assets/images/users/avatar-0.png',
            'layout_mode' => '1',
            'layout_menu' => '1',
            'layout_style' => '1',
            'role_id' => '1',
            'bloqueado' => '0',
            'created_at' => now()
        ]);

        //Atribuir Perfil ao Usuário (Tabela: model_has_roles)
        $user = \App\Models\User::find(1);
        $role = Role::findByName('Super Administrador');
        $user->assignRole($role);
    }
}
