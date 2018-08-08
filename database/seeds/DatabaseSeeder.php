<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tweet;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // 1. run() == php artisan db:seed コマンドを使用すると実行されるメソッド
    public function run()
    {
        Model::unguard(); // マスアサインメントをOFFにするメソッド

        $this->call('TweetsTableSeeder'); // 2. call()を通してTweetsTableSeederクラスをcall(呼び出す)する

        Model::reguard(); // マスアサインメントをONにするメソッド
    }
}

class TweetsTableSeeder extends Seeder
{
    public function run()
    {
        // DB::table('tweets')->delete(); // 3.tweetsテーブルを空にする(IDはそのまま)
        DB::table('tweets')->truncate(); // 3.tweetsテーブルをリセットする(IDもリセット)

        $faker = Faker::create('en_US'); // 4.サンプルのデータが英語で$fakerに代入される

        for ($i=0; $i < 10; $i++) {
              Tweet::create([ // 5.Tweetモデルを使用して下記の要素の作成を行う
                'user_id' => $i+1,
                'title' => $faker->sentence(), // $faker->sentence() 文を生成する
                'content' => $faker->paragraph(), // $faker->sentence() 文章を生成する
                'published_at' => Carbon::today() // Carbonクラスを使用して今日の日付を取得
            ]);
        }
    }
}
