<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Blog</title>
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="ha.php?action=test">
        var list;
    </script>
    <script type="text/javascript"> var parse = JSON.parse(list)</script>
    <script src="js/index.js"></script>
</head>
<body>
<div class="container">
    <!--左侧边导航栏-->
    <div class="col-md-2 nav-sidebar ">
        <div class="header">
            <div class="" style="text-align: -webkit-center">
                <?php
                $json_string = file_get_contents('config.json');
                $data = json_decode($json_string, true);
                echo "
                    <img src=\"image/" .$data["avatar"]."\"". " class=\"img-circle img-responsive\">
                "
                ?>
            </div>

            <?php
                $json_string = file_get_contents('config.json');
                $data = json_decode($json_string, true);
                echo "
                <div class=\"intro\">".$data["intro"]. "</div>
                <div>
                    <div class=\"img-link\"><a href=" .$data["github"]. "><img src=\"./image/github.png\"> </a></div>
                    <div class=\"img-link\"><a href=" .$data["weibo"]. "><img src=\"./image/weibo.png\"> </a></div>
                    <div class=\"img-link\"><a href=" .$data["csdn"]. "><img src=\"./image/csdn.png\"> </a></div>
                </div>
                "
            ?>

        </div>

        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#!/home">首页</a></li>
            <li><a href="#!/about">关于本站</a></li>
            <li><a href="#!/connect">联系博主</a></li>
            <li><a href="#!/link">友链申请</a></li>
        </ul>
    </div>

    <div class="col-md-10 col-md-push-2 post-content">
    </div>
</div>
</body>
</html>
