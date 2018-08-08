@extends('layout')

@section('content')

<h1>{{ $first_name . $last_name }}</h1>
{{-- @while (condition) --}}
	{{-- expr --}}
{{-- @endwhile --}}
@for ($i = 0; $i < count($friends); $i++)
	{{ $friends[$i] }}
@endfor
{{-- @foreach ($array as $element) --}}
	{{-- expr --}}
{{-- @endforeach --}}

@endsection