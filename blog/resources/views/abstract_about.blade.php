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

					<h1 class="entry-title add-bottom">{{ trans('about.about_us') }}</h1>
					<p class="lead">{{ trans('about.subtitle') }}</p>
					<p>{{ trans('about.my_website1') }}<a target="_blank" href="http://marcohern.com/en/#about">{{ trans('about.my_website2') }}</a>.</p>
					<div class="row block-1-2 block-tab-full">
						<div class="bgrid">
							<h3>{{ trans('about.who') }}.</h3>
							<p>{{ Config::get('settings.author') }}</p>
						</div>
						<div class="bgrid">
							<h3>{{ trans('about.when') }}.</h3>
							<p>{{ trans('about.whenc') }}</p>
						</div>
						<div class="bgrid">
							<h3>{{ trans('about.what') }}.</h3>
							<p>{{ trans('about.whatc') }}</p>
						</div>
						<div class="bgrid">
							<h3>{{ trans('about.how') }}.</h3>
							<p>{{ trans('about.howc') }}</p>
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