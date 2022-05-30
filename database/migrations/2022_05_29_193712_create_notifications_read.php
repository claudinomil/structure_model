<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('notifications_read', function (Blueprint $table) {
            $table->id();
            $table->integer('notification_id');
            $table->integer('user_id');
            $table->date('date');
            $table->time('time');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications_read');
    }
};
