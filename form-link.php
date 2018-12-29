<?php
    $url = $_POST["url"];
    echo "欢迎".$url;
    if (!filter_var($url,FILTER_VALIDATE_URL)) {
        echo "\t不是一个合法的 url";
    }
    else {
        echo "\t是一个合法的 url";
    }
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
