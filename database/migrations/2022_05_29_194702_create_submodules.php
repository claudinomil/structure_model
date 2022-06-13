<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('submodules', function (Blueprint $table) {
            $table->id();
            $table->integer('module_id');
            $table->string('name');
            $table->string('menu_text');
            $table->string('menu_url');
            $table->string('menu_route');
            $table->string('menu_icon');
            $table->string('prefix_permission')->unique();
            $table->string('prefix_route')->unique();
            $table->integer('ordem_visualizacao');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('submodules');
    }
};
