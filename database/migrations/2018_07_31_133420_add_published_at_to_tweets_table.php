<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublishedAtToTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tweets', function (Blueprint $table) {
            // 公開日のカラム名をtweetsテーブルに追加
            $table->timestamp('published_at')->nullable();
            // nullable()はnullも入れられる
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tweets', function (Blueprint $table) {
            // 追加したカラムだけ削除する
            $table->dropColumn('published_at');
        });
    }
}
