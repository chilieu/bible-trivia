<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->partial("shared/header") ?>


<!--Facebook sharing detail-->
<meta property="og:site_name" content="Bible Trivia!"/>
<meta property="og:title" content="Challenge yourself with thousands of questions!" />
<meta property="og:url" content="http://www.24hit.net/" />
<meta property="og:description" content="I answered 10 correctly of 10 total random questions from the Bible. How about you?" />
<meta property="og:type" content="quiz" />
<meta property="og:image" content="/img/biblequizbanner.jpg" />
<meta property="fb:app_id" content="411413112240223" />
<!--Facebook sharing detail-->

</head>
    <body>
        
<!--Facebook sharing button-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=411413112240223&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Facebook sharing button-->

        <div class="container-full">
          <img src="/img/biblequizbanner.jpg" class="img-responsive" alt="Responsive image">
        </div>
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-4 col-md-3 col-sm-12 visible-lg-* visible-md-*"></div>

            <div class="col-xl-4 col-md-6 col-sm-12">
              <?php $this->partial("shared/navs") ?>
            </div>

            <div class="col-xl-4 col-md-3 col-sm-12 visible-lg-* visible-md-*"></div>
          </div>
        </div>
        
        <div class="container-fluid">

          <div class="row">
            <div class="col-xl-4 col-md-3 col-sm-12 visible-lg-* visible-md-*"></div>

            <div class="col-xl-4 col-md-6 col-sm-12">
              <?php echo $this->getContent(); ?>


              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- 24hit_bible_trivia -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-0760902944328301"
                   data-ad-slot="3253590024"
                   data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
              
            </div>

            <div class="col-xl-4 col-md-3 col-sm-12 visible-lg-* visible-md-*"></div>
          </div>

        </div>

        <?php $this->partial("shared/footer") ?>

  </body>

</html>
<script type="text/javascript">

$(document).ready(function() {

    $('.fancybox').fancybox();

    $('[data-toggle="popover"]').popover({trigger: 'hover','placement': 'top'});

    // cache the id
    var navbox = $('.nav-tabs');
    // activate tab on click
    navbox.on('click', 'a', function (e) {
      var $this = $(this);
      // prevent the Default behavior
      e.preventDefault();
      // set the hash to the address bar
      window.location.hash = $this.attr('href');
      // activate the clicked tab
      $this.tab('show');
    })

    // if we have a hash in the address bar
    if(window.location.hash){
      // show right tab on load (read hash from address bar)
      navbox.find('a[href="'+window.location.hash+'"]').tab('show');
    }

});

</SCRIPT>