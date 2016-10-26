<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
		<title>Marco's Blog - @yield('subtitle')</title>
		<link rel="stylesheet" type="text/css" href="{{ URL::Asset('lib/bootstrap/dist/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::Asset('lib/bootstrap/dist/css/bootstrap-theme.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::Asset('css/styles.css') }}">
	</head>
	<body>
		<div class="container">
			<section id="header" class="page-header">
				<h1>Marco's Blog</h1>
				<h2><small>Programming and... stuff.</small></h2>
			</section>

@yield('body')

			<footer>
				<div class="copyright">Copyright Marco's Blog, 2016</div>
			</footer>
			
		</div>
		<script src="{{ URL::Asset('lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	@yield('scripts')
	</body>
</html>