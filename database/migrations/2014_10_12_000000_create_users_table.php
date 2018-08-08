<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // upメソッドがデータベースを作成
        // Schema::create('テーブル名', function (Blueprint $table) {
            // $table->データ型('カラム名');
            // $table->データ型('カラム名')->unique(); // unique()は一意の値のみ
            // $table->timestamps(); created_at,updated_atをtimestamp型で挿入するメソッド
        // });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
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
        // upメソッドがデータベースを削除
        Schema::drop('users');
    }
}
