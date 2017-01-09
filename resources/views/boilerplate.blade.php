<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Notebook App - @yield('title', 'Created with Laravel 5.3 using Hallux Template')</title>

        <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!--
        hallux, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

        Download: http://zypopwebtemplates.com/

        License: Creative Commons Attribution
        //-->
    </head>
<body>
    <div id="container" class="width">
        <header>
    	    <div class="width">
        	    <h1><a href="/">NoteBook</a></h1>
    		    <nav>
        			<ul class="sf-menu dropdown">
            			<li class="selected"><a href="/">Home</a></li>
                		<li><a href="examples.html">Notes List</a></li>
    				<ul>
    			    <div class="clear"></div>
        		</nav>
           	</div>
    	    <div class="clear"></div>
        </header>

        @yield('intro')

        <div id="body" class="width">
            @yield('body')
        </div>

        <footer class="width">
            <div class="footer-bottom">
                <p> See the code on <a href="https://github.com/nkrc10/laravel-notebook">GitHub</a> by Rafael Córdoba</p>
            </div>
        </footer>
    </div>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
