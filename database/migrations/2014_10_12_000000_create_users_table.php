<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob');
            $table->text('avatar');
            $table->string('function')->nullable();
            $table->string('layout_mode');
            $table->string('layout_menu');
            $table->string('layout_style');
            $table->integer('role_id')->default(0);
            $table->integer('bloqueado')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name' => 'admin','dob'=>'2000-10-10', 'email' => 'admin@themesbrand.com', 'password' => Hash::make('123456'), 'email_verified_at'=>'2022-01-02 17:04:58', 'avatar' => '/assets/images/users/avatar-1.jpg', 'layout_mode' => '1', 'layout_menu' => '1', 'layout_style' => '1', 'created_at' => now(),]);
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}