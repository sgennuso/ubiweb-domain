<html lang="{{ $lang }}">
	<head>
		<title>Local layout</title>
		<link rel="stylesheet" href="/assets/main.css">
	</head>
	<body>
		<header>
			<h1>{{ $site->trans('hello') }}</h1>
			<nav>
				{!! $site->menu('main') !!}
			</nav>
			@foreach( $site->languages('routes') as $lang => $route )
			<a href="{{ $route }}">{{ $lang }}</a>
			@endforeach
		</header>
		@yield('content')
		<script src="/vendor/ubiweb/template-starter/scripts/main.js"></script>
	</body>
</html>
