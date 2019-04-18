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
    <p>Error!</p>
    <p><?php echo "Error: " .isset($_SESSION["error"]) ? $_SESSION["error"] : "undefined."?></p>
</body>
</html>