<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["submit"])){
        if (!empty($_POST["name"]) && !empty($_POST["message"])){
            $error = 0;

            if (preg_match("/^[0-9][0-9]*$/", $_POST["name"])) {

                if ((strlen($_POST["name"]) + strlen($_POST["message"]) + 3) < 150) {
                    $myfile = fopen("smscontext.txt", "w") or die("Can't open txt file!");
                    $txt = $_POST["message"] . " ~" . $_POST["name"];

                    if (fwrite($myfile, $txt))
                        header("Location: ../redirect/success_page.html");

                    fclose($myfile);

                } else {
                    $error = 1;
                }
            } else {
                $error = 2;
            }
        } else {
            $error = 3;
        }
    } else {
        $error = 4;
    }
} else {
    $error = 4;
}
if ($error) {
    session_start();

    if ($error == 1){
        $_SESSION["error"] = "Max characters: 150!";
    }

    if ($error == 2){
        $_SESSION["error"] = "Numbers only allowed for number input!";
    }

    if ($error == 3){
        $_SESSION["error"] = "You entered empty name/message!";
    }

    if ($error == 4){
        $_SESSION["error"] = "Error with post/submit!";
    }

    header("Location: ../redirect/error_page.php");
}

