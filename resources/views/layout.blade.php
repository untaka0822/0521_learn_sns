<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{-- Boostrap導入 --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
	{{-- ナビゲーションバーのpartialを使用 --}}
	@include('navbar');
	{{-- viewの共通化 --}}
	@yield('content')
	{{-- Boostrap導入 --}}
    <script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.4.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>