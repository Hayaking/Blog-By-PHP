<div class="article-list">
    <div class="item">
        <div class="title">关于本站</div>

        <div class="content">
            <?php
            $json_string = file_get_contents('../config.json');
            $data = json_decode($json_string, true);
            echo $data["about"];
            ?>
        </div>
        <hr>

    </div>

</div>