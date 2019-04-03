<?php
session_start();
if (!isset($_SESSION["error"])){
    $_SESSION["error"] = "Session variable was empty!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link type="text/css" rel="stylesheet" href="../form/css/redirect_pages.css">
    <link rel="icon" type="image/png" href="../form/images/icons/favicon.ico"/>
    <script>
        setTimeout(function(){
            window.location = "../form/index.html";
        }, 15550000);
    </script>
</head>
<body>
<div class="toast__container">
    <div class="toast__cell">
        <div class="toast toast--yellow add-margin">
            <div class="toast__icon">
                <svg version="1.1" class="toast__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 301.691 301.691" style="enable-background:new 0 0 301.691 301.691;" xml:space="preserve">
<g>
	<polygon points="119.151,0 129.6,218.406 172.06,218.406 182.54,0  "></polygon>
	<rect x="130.563" y="261.168" width="40.525" height="40.523"></rect>
</g>
    </svg>
            </div>
            <div class="toast__content">
                <p class="toast__type">Error!</p>
                <p class="toast__message"><?php echo "Error: " .isset($_SESSION["error"]) ? $_SESSION["error"] : "undefined."?></p>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function(){
        jQuery('.toast__close').click(function(e){
            e.preventDefault();
            var parent = $(this).parent('.toast');
            parent.fadeOut("slow", function() { $(this).remove(); } );
        });
    });
</script>
</body>
</html>