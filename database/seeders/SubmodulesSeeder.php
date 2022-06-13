<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class SubmodulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submodules')->insert([
            ['module_id' => '1', 'name' => 'Módulos', 'menu_text' => 'Módulos', 'menu_url' => 'modules', 'menu_route' => 'modules', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'module', 'prefix_route' => 'modules', 'ordem_visualizacao' => 5],
            ['module_id' => '1', 'name' => 'Submódulos', 'menu_text' => 'Submódulos', 'menu_url' => 'submodules', 'menu_route' => 'submodules', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'submodule', 'prefix_route' => 'submodules', 'ordem_visualizacao' => 10],
            ['module_id' => '2', 'name' => 'Home', 'menu_text' => 'Home', 'menu_url' => 'home', 'menu_route' => 'home', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'home', 'prefix_route' => 'home', 'ordem_visualizacao' => 5],
 	        ['module_id' => '2', 'name' => 'Perfis', 'menu_text' => 'Perfis', 'menu_url' => 'funcoes', 'menu_route' => 'funcoes', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'role', 'prefix_route' => 'roles', 'ordem_visualizacao' => 10],
            ['module_id' => '2', 'name' => 'Usuários', 'menu_text' => 'Usuários', 'menu_url' => 'usuarios', 'menu_route' => 'usuarios', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'user', 'prefix_route' => 'users', 'ordem_visualizacao' => 15],
            ['module_id' => '3', 'name' => 'Customização', 'menu_text' => 'Customização', 'menu_url' => 'customizes', 'menu_route' => 'customizes', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'customize', 'prefix_route' => 'customizes', 'ordem_visualizacao' => 5],
            ['module_id' => '3', 'name' => 'Notificações', 'menu_text' => 'Notificações', 'menu_url' => 'notifications', 'menu_route' => 'notifications', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'notification', 'prefix_route' => 'notifications', 'ordem_visualizacao' => 10],
            ['module_id' => '2', 'name' => 'Log de Transações', 'menu_text' => 'Log de Transações', 'menu_url' => 'log_transacoes', 'menu_route' => 'log_transacoes', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'transaction', 'prefix_route' => 'transactions', 'ordem_visualizacao' => 25],
            ['module_id' => '1', 'name' => 'Ferramentas', 'menu_text' => 'Ferramentas', 'menu_url' => 'tools', 'menu_route' => 'tools', 'menu_icon' => 'fas fa-angle-right', 'prefix_permission' => 'tool', 'prefix_route' => 'tools', 'ordem_visualizacao' => 15],
        ]);

        Permission::create(['name' => 'module-list']);
        Permission::create(['name' => 'module-create']);
        Permission::create(['name' => 'module-edit']);
        Permission::create(['name' => 'module-delete']);

        Permission::create(['name' => 'submodule-list']);
        Permission::create(['name' => 'submodule-create']);
        Permission::create(['name' => 'submodule-edit']);
        Permission::create(['name' => 'submodule-delete']);

        Permission::create(['name' => 'home-list']);
        Permission::create(['name' => 'home-create']);
        Permission::create(['name' => 'home-edit']);
        Permission::create(['name' => 'home-delete']);

        Permission::create(['name' => 'role-list']);
        Permission::create(['name' => 'role-create']);
        Permission::create(['name' => 'role-edit']);
        Permission::create(['name' => 'role-delete']);

        Permission::create(['name' => 'user-list']);
        Permission::create(['name' => 'user-create']);
        Permission::create(['name' => 'user-edit']);
        Permission::create(['name' => 'user-delete']);

        Permission::create(['name' => 'notification-list']);
        Permission::create(['name' => 'notification-create']);
        Permission::create(['name' => 'notification-edit']);
        Permission::create(['name' => 'notification-delete']);

        Permission::create(['name' => 'customize-edit']);

        Permission::create(['name' => 'transaction-list']);
    }
}
