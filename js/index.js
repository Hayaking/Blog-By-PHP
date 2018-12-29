$(document).ready(function () {
    //home();
    route();

    window.addEventListener('hashchange', function () {
        route();
    });


    // $(".nav-stacked li:nth-child(1) a").click(function () {
    //     $(".nav-stacked li").removeClass("active");
    //     home();
    //     $(".nav-stacked li:nth-child(1)").addClass("active");
    //
    // });
    // $(".nav-stacked li:nth-child(2) a").click(function () {
    //     loadPage("about.php", 2);
    // });
    // $(".nav-stacked li:nth-child(3) a").click(function () {
    //     loadPage("connect.php", 3);
    // });
    // $(".nav-stacked li:nth-child(4) a").click(function () {
    //     loadPage("link.php",4);
    //
    // });
});

//窗口大小改变
$(window).resize(function () {
    if ($(document).width() < 988) {
        /*把侧边导航栏position改为相对的,
        同时把width改为auto,这样在小屏幕时,导航栏会移动到上头，
        否则会有右边的区域重合
        */
        $(".nav-sidebar").css("position", "relative");
        $(".nav-sidebar").css("width", "auto");
        //设置等宽
        $(".nav-sidebar").css("margin", "0 15px");
        $(".nav-sidebar").removeClass("col-md-2");
        $(".col-md-4").css("padding-left", "0");

    } else {
        //恢复大屏时的样式
        $(".nav-sidebar").css("position", "fixed");
        $(".nav-sidebar").css("width", "");
        $(".nav-sidebar").css("margin", "");
        $(".nav-sidebar").addClass("col-md-2");
        $(".col-md-4").css("padding-left", "15px");
    }

});

function route() {
    //去掉!#/
    let anchor = window.location.hash.substr(3);
    //去掉article/
    if (anchor.indexOf("article") !== -1) {
        var fileName = anchor.substr(8);
        anchor = "article";
    }
    // console.log(anchor+".");
    switch (anchor) {
        case "":
        case "home":
            $(".nav-stacked li").removeClass("active");
            home();
            $(".nav-stacked li:nth-child(1)").addClass("active");
            break;
        case "about":
            loadPage("about.php", 2);
            break;
        case "connect":
            loadPage("connect.php", 3);
            break;
        case "link":
            loadPage("link.php", 4);
            break;
        case "article":
            let htmlobj = $.ajax({url: "mid-html/article.html", async: false});
            let str = htmlobj.responseText;
            str = str.replace("@Src", "_posts/" + fileName);
            console.info(fileName);
            $(".post-content").html(str);
            break;
        default:
            alert("404");
            break;
    }

}

//加载导航栏右边的区域
function loadPostContent() {
    $(".post-content").empty();
    htmlobj = $.ajax({url: "mid-html/post-content.html", async: false});
    $(".post-content").html(htmlobj.responseText);
}

//加载导航栏对应栏目的页面
function loadPage(str, pos) {
    $(".nav-stacked li").removeClass("active");
    loadPostContent();
    $(".mid-content").load("mid-html/" + str);
    $(".nav-stacked li:nth-child(" + pos + ")").addClass("active");

}

//加载主页
function home() {
    loadPostContent();
    //根据php返回的文章数组，添加文章项
    for (let i = 0; i < parse.length; i++) {
        htmlobj = $.ajax({url: "mid-html/home.html", async: false});
        // arr[0] 标题, arr[1] 发表时间
        let arr = dTitleAndDate(parse[i]);
        //替换标题
        let str = htmlobj.responseText.replace("@Title", arr[0]);
        //替换href
        str = str.replace("@Href", "#!/article/" + parse[i]);
        //替换发表时间
        str = str.replace("@Date", arr[1]);
        //替换阅读数
        str = str.replace("@Count_reading", "998");
        //替换标签
        str = str.replace("@Tab", "渣渣");
        $(".mid-content").append(str);
    }
}

//分离 日期-文章标题
function dTitleAndDate(str) {
    let start = 0;
    let count = 0;
    for (let i = start; i < str.length; i++) {
        if (count !== 3 && str.indexOf('-', i) !== -1) {
            start = str.indexOf('-', i) + 1;
            i = start;
            count++;
        }
    }
    //去扩展名
    let pos = str.indexOf(".html");
    return [str.substring(start, pos), str.substring(0, start - 1)];
}