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
        }, 10000);
    </script>
</head>
<body>
<div class="toast__container">
    <div class="toast__cell">
        <div class="toast toast--yellow add-margin">
            <div class="toast__icon">

            </div>
            <div class="toast__content">
                <p class="toast__type">Error!</p>
                <p class="toast__message"><?php echo "Error: " .isset($_SESSION["error"]) ? $_SESSION["error"] : "undefined."?></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>