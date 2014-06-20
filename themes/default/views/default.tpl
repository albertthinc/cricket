<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MSCL &middot; Home Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/themes/default/css/bootstrap.min.css">
        <link rel="stylesheet" href="/themes/default/css/style.css">
        
        <script src="/themes/default/js/vendor/jquery-1.10.2.min.js"></script>
    </head>
    <body>
        <header>
            {include file="header.tpl"}
        </header>
        <nav>
            {$this->parser->parse("top_navigation", '', TRUE)}
        </nav>
        {$this->parser->parse("banner", '', TRUE)}
        
        <script type="text/javascript" src="/themes/default/js/bootstrap.min.js"></script>
        <link href="/themes/default/select2/select2.css" rel="stylesheet"/>
        <script type="text/javascript" src="/themes/default/select2/select2.js"></script>
        <script type="text/javascript" src="/themes/default/js/app.js"></script>
    </body>
</html>