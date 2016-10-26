@extends('layouts.master')

@section('subtitle')
Subtitle
@stop

@section('body')
@for ($i=0;$i<10;$i++)
<article class="row post">
	<div class="col-sm-4">
		<img src="images/nature.jpg" alt="" width="100%" />
	</div>
	<div class="col-sm-8">
		<h3>Title</h3>
		<p>Description</p>
		<p><a href="/p/post" class="btn btn-info">Read more...</a></p>
	</div>
</article>
@endfor

@stop