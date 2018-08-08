@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        {{-- エラーの表示を追加 --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    	<h1>ツイートを投稿</h1>
    	<div class="col-md-6">
    	    <form action="" method="POST">
                {{-- Laravelでは、アプリケーションにより管理されているアクティブなユーザーの各セッションごとに、CSRF「トークン」を自動的に生成しています。そのため、このトークンを認証済みのユーザーのみ、POST送信が有効になります。有効化するためには、formタグ内に下記の関数を書く必要があります。 --}}
                {{ csrf_field() }}
    	    	<div class="form-group">
    	    	    <label for="title">Tweet</label>
    	    	    <input type="text" name="title" class="form-control">
    	    	</div>
    	    	<div class="form-group">
    	    	    <label for="content">Content</label>
    	     	    <textarea name="content" class="form-control" placeholder="ツイートを入力してください"></textarea>
    	    	</div>
    	    	<div class="form-group">
					<input class="form-control" name="published_at" type="date">
				</div>
    	    	<div class="form-group">
    	    	    <input type="submit" value="ツイートする" class="form-control btn-info">
    	    	</div>
    	    </form>
    	</div>
    </div>
</div>
@endsection