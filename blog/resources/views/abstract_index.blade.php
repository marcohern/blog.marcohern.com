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
<iframe width="600" height="400" allowfullscreen style="border-style:none;" src="https://cdn.pannellum.org/2.3/pannellum.htm?panorama=https://pannellum.org/images/alma.jpg"></iframe>
	</div>
</section>

@stop

@section('scripts')
@stop