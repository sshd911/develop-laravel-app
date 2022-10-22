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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->comment('会員ID');
            $table->string('telephone')->nullable()->comment('電話番号');
            $table->string('post_code')->nullable()->comment('自宅住所 郵便番号');
            // $table->foreignId('prefecture_id')->nullable()->references('id')->on('prefectures')->comment('自宅住所 都道府県');
            $table->dateTime('birthday')->comment('生年月日');
            $table->unsignedTinyInteger('gender')->comment('性別; 1: 男性, 2: 女性, 3: その他');
            $table->text('memo')->nullable()->comment('通信欄');
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
        Schema::dropIfExists('user_profiles');
    }
};
