    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="Challenge yourself with thousands of original Bible trivia questions! Sort trivia by difficulty, category, subject or book.">
    <title>Bible Trivia Questions</title>

    <!-- Bootstrap core CSS - can change to your favorite-->
    <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>

    <!-- Adjustment bootstrap CSS - can change to your favorite-->
    <?php echo $this->tag->stylesheetLink('css/style.css'); ?>

    <!-- Bootstrap Glyphicons CSS -->
    <?php echo $this->tag->stylesheetLink('css/bootstrap-glyphicons.css'); ?>  

    <!--DataTables CSS-->
    <?php echo $this->tag->stylesheetLink('lib/datatables/css/dataTables.bootstrap.css'); ?>

    <!--JQuery JS-->
    <?php echo $this->tag->javascriptInclude('js/jquery-1.11.2.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/jquery-migrate-1.2.1.min.js'); ?>

    <!--Boostrap JS-->
    <?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
    <!--DataTables JS-->
    <?php echo $this->tag->javascriptInclude('lib/datatables/js/jquery.dataTables.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('lib/datatables/js/dataTables.bootstrap.js'); ?>

    <!--JQuery UI JS-->
    <?php echo $this->tag->javascriptInclude('js/jquery-ui.min.js'); ?>
    <!--Editable DataTables JS-->
    <?php echo $this->tag->javascriptInclude('lib/editable/jquery.jeditable.js'); ?>
    <?php echo $this->tag->javascriptInclude('lib/editable/jquery.dataTables.editable.js'); ?>

    <!--Re-Ordering Table JS-->
    <?php echo $this->tag->javascriptInclude('js/jquery.rowreordering.js'); ?>


    <!-- Add fancyBox main JS and CSS files -->
    <?php echo $this->tag->javascriptInclude('lib/fancybox/jquery.fancybox.js?v=2.1.5'); ?>
    <?php echo $this->tag->stylesheetLink('lib/fancybox/jquery.fancybox.css?v=2.1.5'); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo $this->tag->javascriptInclude('js/html5shiv.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/respond.min.js'); ?>
    <![endif]-->
    
    <link rel="shortcut icon" href="<?php echo $this->url->getStatic('files/favicon.ico'); ?>" />