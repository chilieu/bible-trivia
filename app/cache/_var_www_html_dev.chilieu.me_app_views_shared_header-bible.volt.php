    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="Challenge yourself with thousands of original Bible trivia questions! Sort trivia by difficulty, category, subject or book.">
    <title>Bible Trivia Questions</title>

    <!-- Bootstrap core CSS - can change to your favorite-->
    <?php echo $this->tag->stylesheetLink('css/flatly/bootstrap.min.css'); ?>

    <!-- Adjustment bootstrap CSS - can change to your favorite-->
    <?php echo $this->tag->stylesheetLink('css/flatly/style.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/mega-menu.css'); ?>

    <!-- Bootstrap Glyphicons CSS -->
    <?php echo $this->tag->stylesheetLink('css/bootstrap-glyphicons.css'); ?>  

    <!--JQuery JS-->
    <?php echo $this->tag->javascriptInclude('js/jquery-1.11.2.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/jquery-migrate-1.2.1.min.js'); ?>

    <!--Boostrap JS-->
    <?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>

    <!-- Add fancyBox main JS and CSS files -->
    <?php echo $this->tag->javascriptInclude('lib/fancybox/jquery.fancybox.js?v=2.1.5'); ?>
    <?php echo $this->tag->stylesheetLink('lib/fancybox/jquery.fancybox.css?v=2.1.5'); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo $this->tag->javascriptInclude('js/html5shiv.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/respond.min.js'); ?>
    <![endif]-->
    
    <!-- Add custom main JS file -->
    <?php echo $this->tag->javascriptInclude('js/mega-menu.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/spin.min.js'); ?>

    <link rel="shortcut icon" href="<?php echo $this->url->getStatic('files/favicon.ico'); ?>" />