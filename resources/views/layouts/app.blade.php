<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name','Smart Form') }} @yield('title')</title>



        <noscript><link rel="stylesheet" href="{{ URL::asset('css/noscript.css') }}'"></noscript>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}" />

        <!-- Fonts -->
        

        
    </head>
    <body>
        <div class="wrapper">

	        <div class="py-4">
	            @yield('content')
	        </div>
	        
	        @include('includes.footer')
	        
		</div>

		<!-- Scripts -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.scrollex.min.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.scrolly.min.js') }}"></script>
		<script src="{{ URL::asset('js/skel.min.js') }}"></script>
		<script src="{{ URL::asset('js/util.js') }}"></script>
		<script src="{{ mix('js/main.js') }}"></script>
    </body>
</html>
