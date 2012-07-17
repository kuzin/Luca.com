<?
    $url = trim($_SERVER["REQUEST_URI"], '/');
    $url == '' ? $page = 'home' : $page = $url;
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>
            <?= ucfirst($page) . ' | ' ?> Luca Paganico Designs
        </title>

        <meta name="description" content="">
        <meta name="keywords" content="">

        <meta name="author" content="humans.txt">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/screen.css?v=1">

        <script src="assets/js/libs/modernizr-1.7.min.js"></script>
    </head>

    <body id="page-<?=($page != '') ? $page : 'home'?>">
        
        <nav>
            <? include('partials/nav.php'); ?>
        </nav>

        <div id="body">

            <article>
                <section>
                    <header>
                        <a href="/" id="logo">Luca Paganico Designs</a>
                    </header>
                    <? include('content/' . $page . '.php'); ?>  
                </section>
            </article>

        </div>

        <? include('partials/footer.php'); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script src="assets/js/libs/jquery.fullscreen.js" type="text/javascript"></script>
        <script src="assets/js/libs/jquery.shadowbox.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <!--[if lt IE7]>
            <script src="assets/js/libs/dd_belated.js"></script>
            <script>DD_belatedPNG.fix('img, .png_bg');</script>
        <![endif]-->
        <script type="text/javascript">
            Shadowbox.init();
        </script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>