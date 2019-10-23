<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Lịch</title>
    <base href="{{asset('xuongkhop')}}/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/data-tables/DT_bootstrap.css')}}" />

    <!--right slidebar-->
    <link href="{{asset('css/slidebars.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">

    <![endif]-->
    <style type="text/css">
        .overlay {
            height: 100%;
            width: 100%;
            display: none;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media  screen and (max-height: 450px) {
            .overlay a {font-size: 20px}
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>
</head>

<body>

<div id="player" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
</div>
<section id="container">

    <header class="header white-bg">
        <span style="float: left"><img src="{{asset('img/logo.jpg')}}" style="width: 100px; height: 100px;padding-left: 10px"></span>
        <div id="vnclock" style="margin-top: 7px"></div>
    </header>
    <section id="main-content">

        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel" style="margin-top: 65px">
                <header class="panel-heading" style="color: #0404B4;text-align: center;font-weight: bold">
                    <img src="{{asset('img/lich.jpg')}}" style="width: 100%; padding-top: 10px">
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table table-height" style="margin-left: 52px" >
                        <table border="0" id="table_fixed" cellpadding="0">
                            <thead style="background: transparent">
                            <tr style="font-size: 14px">
                                <th class="thfont">TÊN VÀ TUỔI BỆNH NHÂN</th>
                                <th class="thfont" >CHẨN ĐOÁN BÁC SĨ</th>
                                <th class="thfont" >PHƯƠNG PHÁP PHẪU THUẬT</th>
                                <th class="thfont">PHẪU THUẬT VIÊN</th>
                                <th class="thfont">TRẠNG THÁI BỆNH NHÂN</th>
                            </tr>
                            </thead>
                        </table>
                        <div id="contain">
                            <table border="0" id="table_scroll" cellpadding="0">
                                <thead style="background: transparent;display: none">
                                <tr style="font-size: 14px">
                                    <th class="thfont">TÊN VÀ TUỔI BỆNH NHÂN</th>
                                    <th class="thfont" >CHẨN ĐOÁN BÁC SĨ</th>
                                    <th class="thfont" >PHƯƠNG PHÁP PHẪU THUẬT</th>
                                    <th class="thfont">PHẪU THUẬT VIÊN</th>
                                    <th class="thfont">TRẠNG THÁI BỆNH NHÂN</th>
                                </tr>
                                </thead>
                                <tbody style="margin-top: 300px;margin-bottom: 300px">
                                @foreach($lich as $record)
                                <tr>
                                    <td>{{$record->tentuoi}}</td>
                                    <td>{{$record->tentuoi}}</td>
                                    <td>{{$record->ppphauthuat}}</td>
                                    <td>{{$record->ptv}}</td>
                                    <td>{{$record->trangthai}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>
            <!-- page end-->
        </section>
    </section>
    <footer class="site-footer" >
        <marquee width="100%" direction="right" height="30%" style="font-size: 15px">
            Hanoi Medical University Hospital        </marquee>
    </footer>
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="http://www.youtube.com/player_api"></script>

<script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/data-tables/DT_bootstrap.js')}}"></script>
<script src="{{asset('js/respond.min.js')}}" ></script>

<!--right slidebar-->
<script src="{{asset('js/slidebars.min.js')}}"></script>

<!--common script for all pages-->
<script src="{{asset('js/common-scripts.js')}}"></script>

<!--script for this page only-->
<script src="{{asset('js/editable-table.js')}}"></script>

<!-- END JAVASCRIPTS -->

<script>
    $(document).ready(function() {

        pageScroll();
        $("#contain").mouseover(function() {
            clearTimeout(my_time);
        }).mouseout(function() {
            pageScroll();
        });

        getWidthHeader('table_fixed','table_scroll');

        showadv()
    });
    var array_ads=[];
    @foreach($quangcao as $record)
    array_ads.push("{{$record->link}}")
    @endforeach
    var my_time;
    // start ad youtube
    var adv_time;
    var player;
    var dialog;

    function openNav() {
        document.getElementById("player").style.display = "block";
    }

    function closeNav() {
        document.getElementById("player").style.display = "none";
    }
    function onPlayerReady(event) {
        event.target.playVideo();
    }
    function onYouTubePlayerAPIReady(item) {
        player = new YT.Player('player', {
            height: '360',
            width: '640',
            videoId: item,
            autoplay:1,
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange(event) {
        // var state = player.getPlayerState()
        console.log(event.data)
        if(event.data === 0) {
            stopVideo();
            closeNav();
            adv_time = setTimeout('showadv()', 1000*3);
        }
        if (event.data === -1 || event.data === 3) {
            playVideo();
        }
    }
    function showadv(){
        if(array_ads.length!=0){
            openNav();

            var item = array_ads[Math.floor(Math.random()*array_ads.length)];
            var url = new URL(item);
            var c = url.searchParams.get("v");
            onYouTubePlayerAPIReady(c);
        }
    }
    function playVideo() {
        player.playVideo();
    }

    function stopVideo() {
        player.destroy();
    }

    // end ad youtube

    function pageScroll() {
        var objDiv = document.getElementById("contain");
        objDiv.scrollTop = objDiv.scrollTop + 3;
        if ((objDiv.scrollTop + 450) == objDiv.scrollHeight) {
            objDiv.scrollTop = 0;
        }
        my_time = setTimeout('pageScroll()', 25);
    }

    function getWidthHeader(id_header, id_scroll) {
        var colCount = 0;
        $('#' + id_scroll + ' tr:nth-child(1) td').each(function () {
            if ($(this).attr('colspan')) {
                colCount += +$(this).attr('colspan');
            } else {
                colCount++;
            }
        });

        for(var i = 1; i <= colCount; i++) {
            var th_width = $('#' + id_scroll + ' > tbody > tr:first-child > td:nth-child(' + i + ')').width();
            $('#' + id_header + ' > thead th:nth-child(' + i + ')').css('width',th_width + 'px');
        }
    }
    window.setTimeout("showTime()", 1000);
    function getVNTime(){
        var time = new Date();
        var dow = time.getDay();
        if(dow==0)
            dow = "Chủ nhật";
        else if (dow==1)
            dow = "Thứ hai";
        else if (dow==2)
            dow = "Thứ ba";
        else if (dow==3)
            dow = "Thứ tư";
        else if (dow==4)
            dow = "Thứ năm";
        else if (dow==5)
            dow = "Thứ sáu";
        else if (dow==6)
            dow = "Thứ bảy";
        var day = time.getDate();
        var month = time.getMonth()+1;
        var year = time.getFullYear();
        var hr = time.getHours();
        var min = time.getMinutes();
        var sec = time.getSeconds();
        day = ((day < 10) ? "0" : "") + day;
        month = ((month < 10) ? "0" : "") + month;
        hr = ((hr < 10) ? "0" : "") + hr;
        min = ((min < 10) ? "0" : "") + min;
        sec = ((sec < 10) ? "0" : "") + sec;
        var str="<p style='font-size:25px'>" +hr + ":" + min + ":" + sec+'</p>'+dow + " " + day + "/" + month + "/" + year
        return str;
    }
    function showTime(){
        var vnclock = document.getElementById("vnclock");
        if (vnclock != null)
            vnclock.innerHTML = getVNTime();
        setTimeout("showTime()", 1000);
    }
</script>
<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(e){for(var t=e+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(t))return i.substring(t.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],newList=["Powerful and Easy-To-Use Control Panel.","1-Click Auto Installer and 24/7 Live Support.","Free Domain, Email and SSL Bundle.","5x faster WordPress performance","Weekly Backups and Fast Response Time."];if(notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 768px) {.web-hosting-90-off-image-wrapper {position: absolute;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} .web-hosting-90-off-image-wrapper {padding: 0 5%}} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{border: 0; border-radius: 3px; background-color: #ff123a !important; padding: 15px 55px !important; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">TRANSFER NOW</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 10px; padding-top: 5px; background-image: url(https://cdn.000webhost.com/000webhost/promotions/springsale/mountains-neon-background.jpg); background-color: #000000; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-color: #ff123a; border-width: 8px;"),notification.className="notice notice-error is-dismissible",(hostingerLogo=hostingerLogo[0]).setAttribute("src","https://cdn.000webhost.com/000webhost/promotions/springsale/logo-hostinger-white.svg"),hostingerLogo.setAttribute("style","float: none !important; height: auto; max-width: 100%; margin: 40px 20px 10px 30px;");var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.remove();var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Fast & Secure Web Hosting. <br>Limited time offer: get an SSL certificate for FREE",paragraph.setAttribute("style",'max-width: 600px; margin-left: 30px; font-family: "Open Sans", sans-serif; font-size: 16px; font-weight: 600;');var list=notification.getElementsByTagName("UL")[0];list.setAttribute("style","max-width: 675px;");for(var listElements=list.getElementsByTagName("LI"),i=0;i<newList.length;i++)listElements[i].setAttribute("style","color:#ffffff; list-style-type: disc; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 14px; font-weight: 300; line-height: 1.5;"),listElements[i].innerHTML=newList[i];listElements[listElements.length-1].remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/springsale/web-hosting-90-off.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>

<style>

    .thfont{
        font-weight: 600 !important;
        height: 70px
        border: 1px solid black;
    }

    .site-footer{
        color: #ffffff;
        /*background-image: url("img/layer6.png");*/

    }

    #vnclock{
        font-weight:bold;
        text-align:center;
        font-size:20px;
        padding:20px;
        /*color:yellow;*/
        float: right;
    }

    .wrapper{
        margin-top: 0px;
    }

    .container{
        /*padding: 1rem;*/
        /*margin: 1rem;*/
    }
    #table-scroll{
        display: block;
        empty-cells: show;

        /* Decoration */
        border-spacing: 0;
    }
    .panel-heading{
        border-color: transparent;
    }

    #table_scroll tbody td {
        background-color: transparent;
    }

    /*#table_scroll.small-first-col td:first-child,*/
    /*#table_scroll.small-first-col th:first-child{*/
    /*    flex-basis:20%;*/
    /*    flex-grow:1;*/
    /*}*/

    #table_scroll tbody tr:nth-child(2n){
        color: darkblue;
    }
    #table_scroll tbody tr:nth-child(2n+1){
        color: black
    }

    /* Other options */

    /*.table-scroll.small-first-col td:first-child,*/
    /*.table-scroll.small-first-col th:first-child{*/
    /*    flex-basis:20%;*/
    /*    flex-grow:1;*/
    /*}*/

    #main-content{
        margin-left: 0px;
    }
    .white-bg{
        background: transparent;
        border: none;
    }
    .panel{
        background: transparent;
    }


    /*QUANGANH*/
    * {
        font-family: 'open sans';
    }
    .site-footer{
        padding: 0px !important;
    }
    #contain {
        height: 450px;
        overflow-y: hidden;

    }
    #table_scroll {
        width: 100%;
        margin-top: 350px;
        margin-bottom: 350px;
    }
    #table_scroll tbody tr td {
        padding-left: 0px;
        /*padding: 10px;*/
        background-color: transparent;
        font-size: 15px;
    }
    #table_fixed thead th {
        background-color: transparent;
    }

    #table_fixed {
        width: 100%;
    }

    table {
        table-layout: fixed;
    }

    .site-footer {
        position: absolute;
        left: 0 ; right: 0; bottom: 0;
    }

</style>
</html>
