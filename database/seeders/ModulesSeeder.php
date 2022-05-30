<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            ['name' => 'Super Administrador', 'menu_text' => 'Super Administrador', 'menu_url' => '', 'menu_icon' => 'fa fa-box', 'menu_label' => '', 'menu_label_color' => '', 'ordem_visualizacao' => 9999],
            ['name' => 'Home', 'menu_text' => 'Home', 'menu_url' => '', 'menu_icon' => 'fa fa-home', 'menu_label' => '', 'menu_label_color' => '', 'ordem_visualizacao' => 10],
	 		['name' => 'Sistema', 'menu_text' => 'Sistema', 'menu_url' => '', 'menu_icon' => 'fa fa-sitemap', 'menu_label' => '', 'menu_label_color' => '', 'ordem_visualizacao' => 8888],
            ['name' => 'Relatórios', 'menu_text' => 'Relatórios', 'menu_url' => '', 'menu_icon' => 'fa fa-print', 'menu_label' => '', 'menu_label_color' => '', 'ordem_visualizacao' => 7777],
        ]);
    }
}
