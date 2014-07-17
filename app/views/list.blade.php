@extends('_master')


@section('head')
	<link rel="stylesheet" href="foobooks.css" type="text/css">
@stop

@section('title')
	All your Books
@stop

@section('content')

	View as:
	<a href='/list/json' target='_blank'>JSON</a> | 
	<a href='/list/pdf' target='_blank'>PDF</a>

	<br><br>
	
	You searched for {{{ $query }}}
		
	@foreach($books as $title => $book)
		
		<section>
			<img class='cover' src='{{ $book['cover'] }}'>
			
			<h2>{{ $title }}</h2>
			
			By {{ $book['author'] }}
			
			<p>
				{{ $book['published'] }}
			</p>
			
			<p>
				Tags:
				@foreach($book['tags'] as $tag)
					{{ $tag }}
				@endforeach
			</p>
			
		</section>
	
	@endforeach

@stop