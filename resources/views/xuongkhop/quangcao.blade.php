
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:46:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Bệnh viên Saint Paul</title>

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
</head>

<body style="color: black">

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo" >Quản lý hồ sơ</a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->

                <!-- settings end -->
                <!-- inbox dropdown start-->

                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->

                <!-- notification dropdown end -->
            </ul>
        </div>

    </header>
    <!--header end-->
    <!--sidebar start-->

    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel">
                <header class="panel-heading">
                    LỊCH PHẪU THUẬT KHOA CHẤN THƯƠNG CHỈNH HÌNH
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group" style="margin-bottom: 20px">
                                <button type="button" class="btn green" data-toggle="modal" data-target="#myModal">
                                    Thêm link quảng cáo <i class="fa fa-plus"></i>
                                </button>

                                <button type="button" class="btn btn-danger" onclick="truncate()" style="margin-left: 20px">Xóa tất cả dữ liệu
                                    <i class="fa fa-trash-o"></i></button>

                                <button type="button" class="btn btn-primary" onclick="chuyentrang()" style="margin-left: 20px">Chuyển sang trang quản lý lịch mổ
                                    </button>
                            </div>

                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Link</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=1;
                            ?>
                            @foreach($quangcao as $record)

                                <tr id="row_{{$record->id}}">
                                    <td>{{$i}}</td>
                                    <td>{{$record->link}}</td>
                                    <td><a onclick="deleteRecord({{$record->id}})" style="cursor: pointer">Delete</a></td>
                                </tr>
                                <?php
                                $i++;
                                ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
    <!-- Right Slidebar start -->

    <!-- Right Slidebar end -->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2013 &copy; FlatLab by VectorLab.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm link quảng cáo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <label for="link">Link</label>
                <input type="text" class="form-control" id="link">

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="addRecord()">Thêm mới</button>
            </div>

        </div>
    </div>
</div>
<style>
    .close{
        margin-top: -25px !important;
    }
</style>


<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery(document).ready(function() {

        EditableTable.init();
    });
    function addRecord() {
        var _token=$('input[name="_token"]').val();
        var data={};
        data['_token']=_token;
        data['link']=$("#link").val();
        $.ajax({
            method: "POST",
            url: "{{asset('xuongkhop/quangcao/add')}}",
            data: data,
        })
            .success(function( data ) {
                alert("Thêm thành công")
                location.reload();

        });
    }
    function deleteRecord(id){
        var _token=$('input[name="_token"]').val();
        var data={};
        data['_token']=_token;
        data['id']=id;
        $.ajax({
            method: "POST",
            url: "{{asset('xuongkhop/quangcao/delete')}}",
            data: data,
        })
            .success(function( data ) {
                $('#row_'+id).hide();
                alert("Xóa thành công")

            });
    }
    function truncate() {
        var _token=$('input[name="_token"]').val();
        var data={};
        data['_token']=_token;
        $.ajax({
            method: "POST",
            url: "{{asset('xuongkhop/quangcao/truncate')}}",
            data: data,
        })
            .success(function( data ) {
                alert("Xóa thành công")
                location.reload();

            });
    }
    function chuyentrang() {
        window.location.href="{{asset('xuongkhop')}}";
    }
</script>


</body>

<!-- Mirrored from thevectorlab.net/flatlab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:46:27 GMT -->
</html>
