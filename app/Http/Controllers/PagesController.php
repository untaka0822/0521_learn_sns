<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {
    	// 変数に値をセット
    	$first_name = 'Hayato';
    	$last_name = 'Takeishi';

    	$friends = array('Joya', 'Michy', 'Hayato', 'Janice');

    	// ディレクトリに入っているviewを使いたい場合は、'ディレクトリ名.view名'と記述する
    	// view関数の第２引数に compact関数を使う
    	return view('pages.about', compact('first_name', 'last_name', 'friends'));
    }
}
