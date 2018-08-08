@extends('layout')

@section('content')
<div class="container">
    <div class="row">
         <h1>タイトル : {{ $tweet->title }}</h1>
         <p>内容 : {{ $tweet->content }}</p>
         <p>作成日 : {{ $tweet->published_at }}</p>
         <a href="http://localhost:8000/tweets/{{ $tweet->id }}/edit" class="btn btn-info">編集する</a>
  {{--        <a href="http://localhost:8000/tweets/{{ $tweet->id }}" class="btn btn-danger">削除する</a> --}}
  		 {!! delete_form(['tweets', $tweet->id]) !!}
         <a href="http://localhost:8000/tweets/" class="btn btn-success">TOPへ戻る</a>
    </div>
</div>
@endsection