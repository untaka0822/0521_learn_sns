@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<h1>Edit : {{ $tweet->title }}</h1>
		{{-- viewsの下からのディレクトリでパスを指定 --}}
		@include('errors.form_error');
		{{-- include関数を使用してerrors/form.errors.blade.phpを読み込んでいる。 --}}

		<div class="col-md-6">
			<form action="/tweets/{{ $tweet->id }}" method="POST">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
				@include('tweets.form', ['published_at' => $tweet->published_at, 'submitButton' => '編集完了'])
			</form>
		</div>
	</div>
</div>
@endsection