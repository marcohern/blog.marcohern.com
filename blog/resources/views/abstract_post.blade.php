@extends('layouts.abstract')

@section('title')
{{ $post->title }} @stop

@section('description')
{{ $post->descr }} @stop

@section('css')
	@foreach($css as $url)
  		<link rel="stylesheet" href="{{ $url }}">
  	@endforeach
@stop

@section('body')
<!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-standard">  

   				<div class="content-media">
						<div class="post-thumb">
							<img src="/image/desktop/cover/{{ $post->cover }}"> 
						</div>  
					</div>

					<div class="primary-content">

						<h1 class="page-title">{{ $post->title }}</h1>	

						<ul class="entry-meta">
							<li class="date">{{ strftime('%B %e, %G', (new Datetime($post->created_at))->getTimestamp()) }}</li>			
						</ul>
						<p class="lead">{{ $post->descr }}</p>

						{!! $post->body !!}

						@include('elements.abstract.about_author')

					</div> <!-- end entry-primary -->		  			   
				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

	{{--@include('elements.abstract.comments')--}}

   </section> <!-- end content -->

@stop

@section('scripts')
	@foreach($scripts as $url)
  		<script src="{{ $url }}"></script>
  	@endforeach
@stop