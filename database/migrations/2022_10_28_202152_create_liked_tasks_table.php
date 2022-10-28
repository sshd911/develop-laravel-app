<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liked_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('user_id')->on('user_profiles')->comment('会員ID');
            $table->foreignId('owner_id')->references('user_id')->on('user_profiles')->comment('持ち主ID');
            $table->foreignId('task_id')->references('id')->on('user_tasks')->comment('タスクID');
            $table->boolean('is_finished')->references('is_finished')->on('user_tasks')->comment('0：未完了, 1:完了');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liked_tasks');
    }
};
