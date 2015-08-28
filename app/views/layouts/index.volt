<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->partial("shared/header") ?>

</head>
    <body>

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
              {{ content() }}

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


</script>
