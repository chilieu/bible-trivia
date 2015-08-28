<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->partial("shared/header") ?>

</head>
    <body>
        
        <?php $this->partial("shared/navs-admin") ?>

        <div class="container-fluid">
            <?php echo $this->getContent(); ?>
        </div>

        <?php $this->partial("shared/footer") ?>

	</body>

</html>
<script type="text/javascript">

$(document).ready(function() {

    $('.fancybox').fancybox({
        afterClose: function () { // USE THIS FOR "afterClose"
            //parent.location.reload(true);
    	}
    });

    $('[data-toggle="popover"]').popover({trigger: 'hover','placement': 'top'});


    $('.delete').click(function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        var answer = confirm ("Are you sure you want to delete from the database?");
        if (answer)
        {
            // Do it!
            window.location = url;
        }
    });


});

</SCRIPT>
