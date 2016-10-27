@extends('layouts.abstract')

@section('body')
<!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<section>  

   				<div class="content-media">						
					<img src="{{ URL::Asset('abstract/images/thumbs/about-us.jpg') }}">						  
				</div>

				<div class="primary-content">

					<h1 class="entry-title add-bottom">About Us.</h1>
					<p class="lead">There is no us. Just me... for now.</p>
					<p>You can learn more about me by checking out my <a target="_blank" href="http://marcohern.com/en/#about">personal website</a>.</p>
					<div class="row block-1-2 block-tab-full">
						<div class="bgrid">
							<h3>Who.</h3>
							<p>Marco Hernandez</p>
						</div>
						<div class="bgrid">
							<h3>When.</h3>
							<p>All the time.</p>
						</div>
						<div class="bgrid">
							<h3>What.</h3>
							<p>Posting about code.</p>
						</div>
						<div class="bgrid">
							<h3>How.</h3>
							<p>With my hands, and very carefully.</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	{{--@include('elements.abstract.comments')--}}
</section>
@stop

@section('scripts')
@stop