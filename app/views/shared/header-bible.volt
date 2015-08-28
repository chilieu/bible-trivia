    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="Challenge yourself with thousands of original Bible trivia questions! Sort trivia by difficulty, category, subject or book.">
    <title>Bible Trivia Questions</title>

    <!-- Bootstrap core CSS - can change to your favorite-->
    {{ stylesheet_link("css/flatly/bootstrap.min.css") }}

    <!-- Adjustment bootstrap CSS - can change to your favorite-->
    {{ stylesheet_link("css/flatly/style.css") }}
    {{ stylesheet_link("css/mega-menu.css") }}

    <!-- Bootstrap Glyphicons CSS -->
    {{ stylesheet_link("css/bootstrap-glyphicons.css") }}  

    <!--JQuery JS-->
    {{ javascript_include("js/jquery-1.11.2.min.js") }}
    {{ javascript_include("js/jquery-migrate-1.2.1.min.js") }}

    <!--Boostrap JS-->
    {{ javascript_include("js/bootstrap.min.js") }}

    <!-- Add fancyBox main JS and CSS files -->
    {{ javascript_include("lib/fancybox/jquery.fancybox.js?v=2.1.5") }}
    {{ stylesheet_link("lib/fancybox/jquery.fancybox.css?v=2.1.5") }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {{ javascript_include("js/html5shiv.js") }}
    {{ javascript_include("js/respond.min.js") }}
    <![endif]-->
    
    <!-- Add custom main JS file -->
    {{ javascript_include("js/mega-menu.js") }}
    {{ javascript_include("js/spin.min.js") }}

    <link rel="shortcut icon" href="{{ static_url("files/favicon.ico") }}" />