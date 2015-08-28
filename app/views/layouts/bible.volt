<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->partial("shared/header-bible") ?>

</head>

<body>


<?php $this->partial("shared/navs-bible") ?>

<div class="container-fluid">

  <div class="col-lg-6 col-md-8 col-sm-12 center-block">

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 bible-content">
          {{ content() }}
        </div>
      </div>

  </div>
  

</div>


        <footer class="footer">
          <div align="center">
                <p class="text-muted"></p>
          </div>
        </footer>

<?php //$this->partial("shared/footer-bible") ?>

</body>

</html>
<script type="text/javascript">

$(document).ready(function() {

    //$('.next-left').height( $('.bible-content').height() );
    //$('.next-right').height( $('.bible-content').height() );



    $('.fancybox').fancybox();

    $('[data-toggle="popover"]').popover({trigger: 'hover','placement': 'top'});

});


</script>
