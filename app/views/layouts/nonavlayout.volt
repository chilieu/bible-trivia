<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->partial("shared/header") ?>

</head>
    <body>
        
        <div class="container-fluid">
            {{ content() }}
        </div>

	</body>
</html>

<SCRIPT TYPE="text/javascript">
$(document).ready(function() {

	$('.fancybox').fancybox({
	    type: 'iframe',
	    afterClose: function () { // USE THIS IT IS YOUR ANSWER THE KEY WORD IS "afterClose"
	        parent.location.reload(true);
	    }
	});

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
