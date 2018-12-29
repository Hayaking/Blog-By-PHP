<?php
    $action=$_GET['action'];
    function list_file(){
            $file="E:\GitHub\Exercises\Blog\mBlog\_posts";

            $post = array();
            //1、首先先读取文件夹
            $temp=scandir($file);
            $j=0;
            //遍历文件夹
            for ($i = 0;$i < count($temp); $i++){
                //判断是否为系统隐藏的文件.和..  如果是则跳过否则就继续往下走，防止无限循环再这里。
                if($temp[$i]=='.' || $temp[$i]=='..'){
                    continue;
                } else{
                    //echo $temp[$i],"<br/>";
                    $post[$j++] = $temp[$i];
                }
            }
            return $post;
        }
    $list = list_file();
    echo "var list = " . "'" .json_encode($list)."'";
?>