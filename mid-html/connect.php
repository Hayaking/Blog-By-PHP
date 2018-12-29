<div class="article-list" style="margin-bottom: 30px">
    <div class=" item">
        <div class="title">联系博主</div>

        <div class="content">
            <div>
                <?php
                $json_string = file_get_contents('../config.json');
                $data = json_decode($json_string, true);
                echo $data["connect"];
                ?>
            </div>
            <div>群号：xxx</div>

            <!--<div class="img-link"><a href="http://www.github.com"><img src="./image/github.png"> </a></div>-->
            <!--<div class="img-link"><a href="http://www.github.com"><img src="./image/weibo.png"> </a></div>-->
            <!--<div class="img-link"><a href="http://www.github.com"><img src="./image/csdn.png"> </a></div>-->

        </div>
    </div>
    <div class=" item">
        <div class="title">留言</div>
        <div class="media">
            <div class="media-left">
                <img src="./image/csdn.png" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
                <h4 class="media-heading">狗蛋</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi at blanditiis consectetur corporis
                    deleniti dignissimos, doloremque est ipsum laborum libero minima, minus nihil nobis possimus quasi
                    repellat, reprehenderit voluptas?</p>
            </div>
        </div>
        <div class="media">
            <div class="media-left">
                <img src="./image/csdn.png" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
                <h4 class="media-heading">狗屎</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolores, eius enim eveniet excepturi
                    explicabo fuga harum iste minus molestias mollitia perferendis porro, recusandae rem ullam velit
                    veritatis voluptatibus voluptatum.</p>
            </div>
        </div>
        <br/>
        <form action="form-connect.php" method="post" id="editor">
            <div class="input-group form-group col-lg-5">
                <span class="input-group-addon">昵称</span>
                <input type="text" name="nickname" class="form-control">
            </div>
            <div class="input-group form-group  col-lg-5">
                <span class="input-group-addon">邮箱</span>
                <input type="text" name="email" class="form-control">
            </div>

            <textarea name="comment" class="col-lg-12" rows="5" style="display: block;margin-bottom: 10px">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque consequatur corporis dolorem dolorum molestias porro recusandae temporibus voluptas. Ab alias dolores et iure maxime nesciunt nihil odio rerum voluptatum.
            </textarea>
            <input type="submit" class="form-control" style="background-color: #2aabd2">
        </form>
        <hr/>

    </div>
</div>



