<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <haed>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        
    </haed>
    
    <body class="background">
        <hader class="header">
    		<div class="header-inner">
    			<a href="/"><div class="header-left"><img src="{{ asset('images/logo-white.png') }}" class="logo" alt="logo"></div></a>
    			<!--<a href="">--><div class="header-right"><!--<img src="images/user-image.png" class="user-image">--><form action="{{ route('logout') }}" method="post">
                    @csrf
              <input type="submit" value="ログアウト">
            </form></div></a>
    		</div>
	    </hader>
        <main class="content">
                    @yield('content')
        </main>
        
        <footer class="footer">
            <p>fam-com</p>
        </footer>
        
    </body>
</html>