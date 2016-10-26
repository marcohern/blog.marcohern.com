<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>{{ Config::get('settings.name') }}</title>
	<meta name="description" content="@yield('description')">  
	<meta name="author" content="{{ Config::get('settings.author') }}">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ URL::Asset('abstract/css/base.css') }}">
   <link rel="stylesheet" href="{{ URL::Asset('abstract/css/vendor.css') }}">  
   <link rel="stylesheet" href="{{ URL::Asset('abstract/css/main.css') }}">
        

   <!-- script
   ================================================== -->
	<script src="{{ URL::Asset('abstract/js/modernizr.js') }}"></script>
	<script src="{{ URL::Asset('abstract/js/pace.min.js') }}"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ URL::Asset('abstract/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ URL::Asset('abstract/favicon.ico') }}" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="/">Author</a>
	      </div>

	      @include('elements.abstract.nav')

		{{--@include('elements.abstract.navsearch')--}}
   		
   	</div>     		
   	
   </header> <!-- end header -->

@yield('body')

{{--@include('elements.abstract.pager')--}}
   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">
            @include('elements.abstract.about')
            @include('elements.abstract.links_site')
            @include('elements.abstract.links_social')
            {{--@include('elements.abstract.subscribe')--}} 

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Abstract 2016</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="{{ URL::Asset('abstract/js/jquery-2.1.3.min.js') }}"></script>
   <script src="{{ URL::Asset('abstract/js/plugins.js') }}"></script>
   {{--<script src="{{ URL::Asset('abstract/js/jquery.appear.js') }}"></script>--}}
   <script src="{{ URL::Asset('abstract/js/main.js') }}"></script>
   @yield('scripts')
</body>

</html>