<!DOCTYPE html>
<html>
    <head>
        <title>{title}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <script src="js/vendor/modernizr-2.7.1.min.js"></script>        
        <style type="text/css">
            body {
                font-family: 'Open Sans', sans-serif;
            }
        </style>
    </head>
    <body class="loading">
        
        <div id="header" style="background-image: url('/img/header.jpg');" >
            <h1>{pageTitle}</h1>
            <span class="mynav">
                <ul>
                    <li><a href="/admin">Admin</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/Contact_us">Contact Us</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/dine">Dine</a></li>                    
                    <li><a href="/index.php">Home</a></li>
                </ul>
            </span>
        </div>
        
       	<main>
	<div id="contents">
	{content}
	</div>
        </main>
        
        <div id="footer" class="span12" align="center">
                Copyright &copy 2015 - Mail:<a href="mailto:explorer@van.com">I <3 Vancouver</a>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/imagesloaded.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/_main.js"></script>
        <script type="text/javascript" src="js/jquery.stellar.min.js"></script>

    </body>
</html>
