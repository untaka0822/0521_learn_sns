<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TweetRequest;
use App\Http\Controllers\Controller;
use App\Tweet; // 使用するモデルを書く必要がある
use Carbon\Carbon; // PHPのDateTimeクラスをオーバーラップした日付操作ライブラリ

class TweetsController extends Controller
{
    public function index()
    {
    	// SELECT * FROM `tweets`;
    	// $tweets = Tweet::all(); // 追加 "モデル名::Eloquent" の形
        $tweets = Tweet::latest('published_at')->published()->get();
        // published()はModelで定義しているscopePublished()
        // SELECT * FROM `tweets` WHERE `published_at` <= 今の時間 ORDER BY `published_at` DESC
        // dd($tweets);
    	// dd() == PHPでいうvar_dumpの進化版
    	// #attibutesの中身が取れている値
    	// SELECT * FROM `tweets` WHERE `id`=()内の数字; ない場合はnullを返す
    	// $tweet = Tweet::find(1);
    	// SELECT * FROM `tweets` WHERE `id`=()内の数字; ない場合はエラーを返す
    	// $tweet = Tweet::findOrFail(1);
        // dd($tweet);

        // $now = Carbon::now();
        // dd($now);
        // $birthday = Carbon::parse('1995-08-02');
        // dd($birthday->age);

    	return view('tweets.index', compact('tweets'));
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function show($id)
    {
        $tweet = Tweet::findOrFail($id);
        // SELECT * FROM `tweets` WHERE `id`=$id;
        // dd($tweet);

        return view('tweets.show', compact('tweet'));
    }

    public function store(TweetRequest $request)
    {

        // $request == POST送信された値
        $input = $request->all();
        dd($input);
        Tweet::create($input);
        // INSERT INTO `tweets` SET $_POSTの値;
        return redirect('tweets');
    }

    public function edit($id)
    {
        $tweet = Tweet::findOrFail($id);
        return view('tweets.edit', compact('tweet'));
    }

    public function update($id, Request $request)
    {
        $tweet = Tweet::findOrFail($id);
        // SELECT * FROM `tweets` WHERE `id`=$id;

        $tweet->update($request->all());

        return redirect(url('tweets', [$tweet->id]));
    }

    public function destroy()
    {
        $tweet = Tweet::findOrFail($id);
        $tweet->delete(); // DELETE FROM `tweets` WHERE `id`=$id
        return redirect('tweets');
    }

    public function getTitleAttribute($value)
    {
        return mb_strtoupper($value); // mb_strtoupper関数がメソッド内の値を大文字に変換することができる
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = mb_strtolower($value); // mb_strtolower関数がメソッド内での文字を小文字に変換することができる
    }
}
