@extends('layouts.abstract')

@section('description')
Marco's Blog, Programming, C++, Excercises. Where Marco solves well known problem by writing not so well known code. @stop

@section('body')

<section id="bricks">
	<div class="row masonry">
		<div class="bricks-wrapper">
			<div class="grid-sizer"></div>
{{-- @include('elements.abstract.featured') --}}

	@foreach($posts as $post)

		@include('elements.abstract.excerp',['post' => $post])

	@endforeach

		</div>
	</div>
</section>
@stop

@section('scripts')
@stop