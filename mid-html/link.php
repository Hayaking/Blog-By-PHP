<div class="article-list">
    <div class=" item">
        <div class="title">友联申请</div>
        <div class="content">
            <div>
                <?php
                    $json_string = file_get_contents('../config.json');
                    $data = json_decode($json_string, true);
                    $link = $data["link"];
                    foreach ($link as $item) {
                        echo "<a style='margin-right:20px' href='".$item["url"]."'>".$item["name"]."</a>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class=" item">
        <div class="title">申请</div>

        <form action="form-link.php" method="post" id="editor">
            <div class="input-group form-group col-lg-5">
                <span class="input-group-addon">网址</span>
                <input type="text" name="url" class="form-control">
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