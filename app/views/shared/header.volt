    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="Challenge yourself with thousands of original Bible trivia questions! Sort trivia by difficulty, category, subject or book.">
    <title>Bible Trivia Questions</title>

    <!-- Bootstrap core CSS - can change to your favorite-->
    {{ stylesheet_link("css/bootstrap.min.css") }}

    <!-- Adjustment bootstrap CSS - can change to your favorite-->
    {{ stylesheet_link("css/style.css") }}

    <!-- Bootstrap Glyphicons CSS -->
    {{ stylesheet_link("css/bootstrap-glyphicons.css") }}  

    <!--DataTables CSS-->
    {{ stylesheet_link("lib/datatables/css/dataTables.bootstrap.css") }}

    <!--JQuery JS-->
    {{ javascript_include("js/jquery-1.11.2.min.js") }}
    {{ javascript_include("js/jquery-migrate-1.2.1.min.js") }}

    <!--Boostrap JS-->
    {{ javascript_include("js/bootstrap.min.js") }}
    <!--DataTables JS-->
    {{ javascript_include("lib/datatables/js/jquery.dataTables.min.js") }}
    {{ javascript_include("lib/datatables/js/dataTables.bootstrap.js") }}

    <!--JQuery UI JS-->
    {{ javascript_include("js/jquery-ui.min.js") }}
    <!--Editable DataTables JS-->
    {{ javascript_include("lib/editable/jquery.jeditable.js") }}
    {{ javascript_include("lib/editable/jquery.dataTables.editable.js") }}

    <!--Re-Ordering Table JS-->
    {{ javascript_include("js/jquery.rowreordering.js") }}


    <!-- Add fancyBox main JS and CSS files -->
    {{ javascript_include("lib/fancybox/jquery.fancybox.js?v=2.1.5") }}
    {{ stylesheet_link("lib/fancybox/jquery.fancybox.css?v=2.1.5") }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {{ javascript_include("js/html5shiv.js") }}
    {{ javascript_include("js/respond.min.js") }}
    <![endif]-->
    
    <link rel="shortcut icon" href="{{ static_url("files/favicon.ico") }}" />