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
            $table->string('title')->nullable()->comment('タスクタイトル');
            $table->string('details')->nullable()->comment('タスク詳細');
            $table->string('remarks')->nullable()->comment('備考');
            $table->timestamp('deadline')->comment('期限');
            $table->boolean('is_finished')->default(0)->comment('0：未完了, 1:完了');
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
