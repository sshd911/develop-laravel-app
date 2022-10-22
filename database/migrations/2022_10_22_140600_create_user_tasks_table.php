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
        Schema::create('user_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('user_id')->on('user_profiles')->comment('会員ID');
            $table->foreignId('task_id')->references('id')->on('task_types')->comment('タスクの種類');
            $table->string('details')->comment('タスク詳細');
            $table->string('remarks')->comment('備考');
            $table->timestamp('deadline')->comment('期限');
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
        Schema::dropIfExists('user_tasks');
    }
};
