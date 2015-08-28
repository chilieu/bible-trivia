<!DOCTYPE html>
<html ng-app="bibleApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <meta name="description" content="Challenge yourself with thousands of original Bible trivia questions! Sort trivia by difficulty, category, subject or book.">
    <title>AngularJS Bible App | www.24hit.net</title>


    <link rel="stylesheet" type="text/css" href="asset/css/flatly/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/flatly/style.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap-glyphicons.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/mega-menu.css" />

    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/angular.min.js"></script>
    <script type="text/javascript" src="asset/js/app.js"></script>

    <script type="text/javascript" src="asset/js/mega-menu.js"></script>

  </head>
 <body>
    <!--  Store Header  -->
    <header></header>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="row">


  <div class="col-lg-6 col-md-8 col-sm-12 center-block">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <!--Left Nav-->
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo !empty($_COOKIE["bible-version"]) ? $_COOKIE["bible-version"] : "KJV";?> <span class="caret"></span></a>
        <ul class="dropdown-menu bible-version" role="menu">
          <?php foreach($version as $item):?>
            <li><a href=""><?php echo $item->abbreviation;?></a></li>
          <?php endforeach;?>
        </ul>
      </li>

      <li class="dropdown menu-large">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo empty($book) ? "Book" : $book;?> <span class="caret"></span></a>

        <ul class="dropdown-menu megamenu row bible-book-container">

          <li class="col-sm-6">
            <h3 class="dropdown-header">Old Testament</h3>
            <hr>
            <ul class="col-sm-6">
              <?php foreach($ot as $item):?>
              <li class="bible-book"><a href=""><?php echo $item->n;?></a></li>
              <?php if($c == 20):?>
                </ul><ul class="col-sm-6">
              <?php endif;?>
              <?php $c++;?>
              <?php endforeach;?>
            </ul>
          </li>

          <li class="col-sm-6">
            <h3 class="dropdown-header">New Testament</h3>
            <hr>
            <ul class="col-sm-6">
              <?php foreach($nt as $item):?>
              <li class="bible-book"><a href=""><?php echo $item->n;?></a></li>
              <?php if($c == 20):?>
                </ul><ul class="col-sm-6">
              <?php endif;?>
              <?php $c++;?>
              <?php endforeach;?>
            </ul>
          </li>

        </ul>

      </li>

    </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.col-xl-8 col-md-8 col-sm-12 center-block -->

  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</nav>



<div class="container-fluid" ng-controller="BibleController as bible">

  <div class="col-lg-6 col-md-8 col-sm-12 center-block">

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 bible-content">

        <div class="col-lg-6 col-md-8 col-sm-12 center-block chapter-title" id="bible-chapter">

          <a href="" ng-if="bible.data.bible[0].c > 1"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></a>

          <span class="text-center">Chapter {{bible.data.bible[0].c}}</span>

          <a href="" ng-if="bible.data.bible[0].c < bible.data.chapters"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>

        </div>


          <div class="row">
            <span class="bible-verse"  ng-repeat="verse in bible.data.bible">
              <a class="label" id="verse-{{verse.b}}{{verse.c}}{{verse.v}}">{{verse.v}}</a>
              <span class="bible-verse">{{verse.t}}</span>
            </span>
          </div>

        </div>
      </div>

  </div>


</div>


        <footer class="footer">
          <div align="center">
                <p class="text-muted"></p>
          </div>
        </footer>


  </body>
</html>
