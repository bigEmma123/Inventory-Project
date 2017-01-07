<htmL>
<head>@yield('title')
<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
    <link rel='stylesheet' type='text/css' href='css/wareHome.css' />
    <script type='text/javascript' src='js/jquery.js'>
    
    </script>
    <script type='text/javascript' src='js/animate.js'></script>
    
    </head>
    <body>
        <div class='page-header'>
        @yield('heading')
        </div>
        <div class='container'>
        <div class='jumbotron'>
            <span class='welcomeMsg'>@yield('welcome'),</span><br/>
            <span class='secondMsg'>@yield('msg')</span><br /><br />
            <div class="links">
                @yield('links')
            </div>
        </div>
        </div>
    </body>
</htmL>