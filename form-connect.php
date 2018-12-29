<?php
    $nickname = $_POST["nickname"];
    echo "\t欢迎".$nickname;
    echo "<br/>";

    $email = $_POST["email"];
    echo "邮箱" . $email;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "\t不是一个合法的 E-Mail";
    }
    else {
        echo "\t是一个合法的 E-Mail";
    }

    echo "<br/>";
    echo "\t评论是".$_POST["comment"];
?>
