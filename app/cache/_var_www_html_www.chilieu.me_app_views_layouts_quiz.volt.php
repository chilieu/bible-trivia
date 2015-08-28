<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->partial("shared/header") ?>


<!--Facebook sharing detail-->
<meta property="og:site_name" content="Bible Trivia!"/>
<meta property="og:title" content="Challenge yourself with thousands of questions! Select by difficulty, category, subject or book." />
<meta property="og:url" content="http://chilieu.me/" />
<meta property="og:description" content="I answered 10 correctly of 10 total random questions from the Bible. How about you?" />
<meta property="og:type" content="quiz" />
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

        <?php $this->partial("shared/navs") ?>

        <div class="container-fluid">

		<div class="row">
		<div class="col-xl-4 col-md-3 col-sm-12 visible-lg-* visible-md-*"></div>

		<div class="col-xl-4 col-md-6 col-sm-12">

            <?php echo $this->getContent(); ?>
            
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


});

</SCRIPT>