@extends('layouts.abstract')

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
							<li class="date">September 06, 2016</li>			
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
@stop