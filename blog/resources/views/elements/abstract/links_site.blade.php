<div class="col-two tab-1-3 mob-1-2 site-links">
	<h4>{{ trans('nav.site_links') }}</h4>
	<ul>
		<li><a href="{{ URL::to(LaravelLocalization::getCurrentLocale().'/') }}">{{ trans('nav.home') }}</a></li>
		<li><a href="{{ URL::to(LaravelLocalization::getCurrentLocale().'/about') }}">{{ trans('nav.about') }}</a></li>
		<li><a href="{{ URL::to(LaravelLocalization::getCurrentLocale().'/contact') }}">{{ trans('nav.contact') }}</a></li>
	</ul>
</div>