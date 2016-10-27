<article class="brick entry format-standard animate-this">
	<div class="entry-thumb">
	  <a href="{{ URL::to(LaravelLocalization::getCurrentLocale().'/post/'.$post->uslug) }}" class="thumb-link">
	      <img src="/image/desktop/index/{{$post->cover}}" alt="building">             
	  </a>
	</div>

	<div class="entry-text">
		<div class="entry-header">

			<div class="entry-meta">
				<span class="cat-links">
				<!--
					<a href="#">Design</a> 
					<a href="#">Photography</a>
					-->           				
				</span>			
			</div>

			<h1 class="entry-title"><a href="{{ URL::to(LaravelLocalization::getCurrentLocale().'/post/'.$post->uslug) }}">{{ $post->title }}</a></h1>
			
		</div>
		<div class="entry-excerpt">
			{{ $post->descr }}
		</div>
	</div>
</article> <!-- end article -->