@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="/tweets/create" class="btn btn-info">ツイートを作成する</a>
			<p>美味しく塩分、水分補給</p>
			<input type="button" class="btn btn-info" value="なんでやねん">
			@foreach ($tweets as $tweet)
				<h3>{{ $tweet['title'] }}</h3>
				<p>{{ $tweet['content'] }}</p>
			@endforeach
			<p>美味しく塩分、水分補給</p>
		</div>
	</div>
</div>
@endsection