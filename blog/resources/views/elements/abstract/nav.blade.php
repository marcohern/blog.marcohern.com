

<nav id="main-nav-wrap">
	<ul class="main-navigation sf-menu">
		<li class="{{ $nav_home }}"><a href="/{{ LaravelLocalization::getCurrentLocale() }}/" title="">{{ trans('nav.home') }}</a></li>
		<li class="{{ $nav_about }}"><a href="/{{ LaravelLocalization::getCurrentLocale() }}/about" title="">{{ trans('nav.about') }}</a></li>
		<li class="{{ $nav_contact }}"><a href="http://marcohern.com/{{ (LaravelLocalization::getCurrentLocale() == 'es') ? '' : LaravelLocalization::getCurrentLocale().'/' }}#contacts" title="">{{ trans('nav.contact') }}</a></li>
		<li>
			@if (LaravelLocalization::getCurrentLocale() == 'es')
				<a href="/en">English</a>
			@else
				<a href="/es">Español</a>
			@endif
		</li>
		{{--							
		<li class="has-children">
			<a href="category.html" title="">Categories</a>
			<ul class="sub-menu">
            <li><a href="category.html">Wordpress</a></li>
            <li><a href="category.html">HTML</a></li>
            <li><a href="category.html">Photography</a></li>
            <li><a href="category.html">UI</a></li>
            <li><a href="category.html">Mockups</a></li>
            <li><a href="category.html">Branding</a></li>
         </ul>
		</li>
		<li class="has-children">
			<a href="single-standard.html" title="">Blog</a>
			<ul class="sub-menu">
            <li><a href="single-video.html">Video Post</a></li>
            <li><a href="single-audio.html">Audio Post</a></li>
            <li><a href="single-gallery.html">Gallery Post</a></li>
            <li><a href="single-standard.html">Standard Post</a></li>
         </ul>
		</li>
		--}}										
	</ul>
</nav> <!-- end main-nav-wrap -->