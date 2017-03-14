@extends('layouts.abstract')

@section('title')
{{ $post->title }} @stop

@section('description')
{{ $post->descr }} @stop

@section('css')
<link rel="stylesheet" href="https://cdn.pannellum.org/2.3/pannellum.css">
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

						<iframe allowfullscreen style="border-style:none;width:100%;height:400px" src="https://cdn.pannellum.org/2.3/pannellum.htm?panorama=https://pannellum.org/images/alma.jpg"></iframe>

						@include('elements.abstract.about_author')

					</div> <!-- end entry-primary -->		  			   

	  			   

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

	{{--@include('elements.abstract.comments')--}}

   </section> <!-- end content -->

@stop

@section('scripts')
  <script src="https://cdn.pannellum.org/2.3/pannellum.js"></script>
@stop