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

					<h1 class="entry-title add-bottom">Acerca de nosotros</h1>
					<p class="lead">NO hay nosotros. Solo yo... por ahora.</p>
					<p>Si quieres saber mas de mi pilla mi <a target="_blank" href="http://marcohern.com/#about">pagina web personal</a>.</p>
					<div class="row block-1-2 block-tab-full">
						<div class="bgrid">
							<h3>Quien.</h3>
							<p>Marco Hernandez</p>
						</div>
						<div class="bgrid">
							<h3>Cuando.</h3>
							<p>¡Todo el tiempo!</p>
						</div>
						<div class="bgrid">
							<h3>Que.</h3>
							<p>Escribiendo sobre código.</p>
						</div>
						<div class="bgrid">
							<h3>Como.</h3>
							<p>Con mis manos y con mucho cuidado.</p>
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