@extends('layouts.abstract')

@section('title')
{{ trans('header.title') }} @stop

@section('description')
{{ trans('header.description') }} @stop

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