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

    <body id="page-home">
        
        <nav>
            <? include('partials/nav.php'); ?>
        </nav>

        <div id="body">

            <article>
                <section>
                    <header>
                        <a href="/" id="logo">Luca Paganico Designs</a>
                    </header>
                    <h1>Oh noes. 404</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                    <a href="/"><a href="/" class="btn">Go Back Home</a>
                </section>
            </article>

        </div>

        <? include('partials/footer.php'); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script src="assets/js/libs/jquery.fullscreen.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <!--[if lt IE7]>
            <script src="assets/js/libs/dd_belated.js"></script>
            <script>DD_belatedPNG.fix('img, .png_bg');</script>
        <![endif]-->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>