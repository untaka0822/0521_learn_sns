<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tweet extends Model
{
    // 何も書いていなくてもphp artisan tinkerでDBの操作ができる

	// $fillable - ホワイトリスト_複数代入時に代入を許可する属性を配列で設定
    protected $fillable = ['title', 'content', 'published_at'];
    // protected $fillable = array('title', 'content', 'published_at');
    // protected $fillable = ['カラム名1', 'カラム名2', 'カラム名3'...];

    // $guarded - ブラックリスト_複数代入時に代入を許可しない属性を配列で設定
    // protected $guarded = ['id'];

    // published_at で日付ミューテーターを使う
    protected $dates = ['published_at'];

    // published scopeを定義
    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }
}
