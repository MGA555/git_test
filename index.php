<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Git Test</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>


<body>
<header>
    This is the header.
</header>
<div role="main">
    This is the main div.
</div>
<footer>
    This is the footer.
</footer>



<?php
if ($_SERVER['HTTP_HOST'] == 'localhost' || strstr($_SERVER['HTTP_HOST'], '192.168.2') || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    echo ('<script src="js/libs/jquery.min.js"></script>');
} else {
    echo('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>');
   }
?>
<script defer src="js/plugins.js"></script>
<script defer src="js/script.js"></script>
<?php
if ($_SERVER['HTTP_HOST'] == 'localhost' || strstr($_SERVER['HTTP_HOST'],'192.168.2') || $_SERVER['HTTP_HOST'] == '127.0.0.1'){

}else{
    echo<<<LIVE
     <script>
         var _gaq = [
             ['_setAccount', 'UA-XXXXX-X'],
             ['_trackPageview'],
             //['_trackPageLoadTime']
         ];
         (function (d, t) {
             var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
             g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
             s.parentNode.insertBefore(g, s)
         }(document, 'script'));
     </script>

LIVE;
}
?>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script defer>window.attachEvent('onload', function () {
    CFInstall.check({mode:'overlay'})
})</script>
<![endif]-->

</body>
</html>
