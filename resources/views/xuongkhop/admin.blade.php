
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
                                    Thêm ca mổ <i class="fa fa-plus"></i>
                                </button>

                                <button type="button" class="btn btn-danger" onclick="truncate()" style="margin-left: 20px">Xóa tất cả dữ liệu
                                    <i class="fa fa-trash-o"></i></button>
                                <button type="button" class="btn btn-primary" onclick="chuyentrang()" style="margin-left: 20px">Chuyển sang trang quản lý quảng cáo
                                </button>

                            </div>
                            <div style="margin-bottom: 20px">
                                <form method="post" enctype="multipart/form-data" action="{{url('xuongkhop/import')}}">
                                    <label for="import">Import file excel</label>
                                    <input type="file" id="import"  name="selectFile">
                                    <button type="submit" name="upload" value="upload" id="uploadBtn" class="btn btn-success" style="margin-top: 10px">Upload</button>
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            Báo lỗi<br><br>
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <strong>    {{$message}}</strong>
                                        </div>
                                    @endif
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                </form>
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th>Tên tuổi</th>
                                <th>Chẩn đoán bác sĩ</th>
                                <th>PP phẫu thuật</th>
                                <th>BS phẫu thuật</th>
                                <th>Trạng thái hiện tại của bênh nhân</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lich as $record)
                                <tr id="row_{{$record->id}}">
                                    <td>{{$record->tentuoi}}</td>
                                    <td>{{$record->chandoan}}</td>
                                    <td>{{$record->ppphauthuat}}</td>
                                    <td>{{$record->ptv}}</td>
                                    <td>{{$record->trangthai}}</td>
                                    <td><a onclick="edit({{$record->id}})" style="cursor: pointer">Edit</a></td>
                                    <td><a onclick="deleteRecord({{$record->id}})" style="cursor: pointer">Delete</a></td>
                                </tr>
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
                <h4 class="modal-title">Thêm ca mổ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <label for="name">Họ và tên</label>
                <input type="text" class="form-control" id="name">

                <label for="chandoan">Chẩn đoán:</label>
                <input type="text" class="form-control" id="chandoan">
                <label for="ppphauthuat">PP phẫu thuật:</label>
                <input type="text" class="form-control" id="ppphauthuat">
                <label for="bsphauthuat">Phẫu thuật viên:</label>
                <input type="text" class="form-control" id="bsphauthuat">
                <label for="status">Trạng thái của bệnh nhân:</label>
                <input class="form-control" list="status2"  onchange="setColor('status')" name="status" id="status">
                <datalist id="status2" >
                    <option value="Chờ mổ" style="background-color: yellow">
                    <option value="Đã chuyển mổ" style="color: #01a89e">
                    <option value="Đang phẫu thuật trong phòng mổ VN" style="color: #2fa360">
                    <option value="Đang phẫu thuật phòng mổ TT KTC" style="color: #2fa360">
                    <option value="Hậu phẫu tại phòng mổ" style="color: gray">
                    <option value="Chuyển khoa Tăng cường Ngoại" style="color: gray">
                    <option value="Chuyển khoa Tăng cường Nội" style="color: gray">
                    <option value="Chuyển Trung tâm Kỹ thuật cao" style="color: gray">
                    <option value="Đã chuyển về khoa CTCH" style="color: #2fa360">
                    <option value="Hoãn mổ" style="color: red">
                </datalist>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="addRecord()">Thêm mới</button>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="name2">Họ và tên</label>
                <input type="text" class="form-control" id="name2">

                <label for="chandoan2">Chẩn đoán:</label>
                <input type="text" class="form-control" id="chandoan2">
                <label for="ppphauthuat2">PP phẫu thuật:</label>
                <input type="text" class="form-control" id="ppphauthuat2">
                <label for="bsphauthuat2">Phẫu thuật viên:</label>
                <input type="text" class="form-control" id="bsphauthuat2">
                <label for="status3">Trạng thái của bệnh nhân:</label>
                <input class="form-control" list="status2"  onchange='setColor("status3")' name="status" id="status3">
                <datalist id="status2" >
                    <option value="Chờ mổ" style="background-color: yellow">
                    <option value="Đã chuyển mổ" style="color: #01a89e">
                    <option value="Đang phẫu thuật trong phòng mổ VN" style="color: #2fa360">
                    <option value="Đang phẫu thuật phòng mổ TT KTC" style="color: #2fa360">
                    <option value="Hậu phẫu tại phòng mổ" style="color: gray">
                    <option value="Chuyển khoa Tăng cường Ngoại" style="color: gray">
                    <option value="Chuyển khoa Tăng cường Nội" style="color: gray">
                    <option value="Chuyển Trung tâm Kỹ thuật cao" style="color: gray">
                    <option value="Đã chuyển về khoa CTCH" style="color: #2fa360">
                    <option value="Hoãn mổ" style="color: red">
                </datalist>
                <input type="text" style="display: none" id="id">

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="editData()">Sửa</button>
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
    function addRecord(){
        var _token=$('input[name="_token"]').val();

        var data={}
        data['tentuoi']=$('#name').val();
        data['ppphauthuat']=$('#ppphauthuat').val();
        data['ptv']=$('#bsphauthuat').val();
        data['trangthai']=$('#status').val();
        data['chandoan']=$('#chandoan').val();
        data['_token']=_token;
        $.ajax({
            method: "POST",
            url: "{{asset('xuongkhop/store')}}",
            data: data,
        })
            .success(function( msg ) {
                alert( "Thêm thành công");
                location.reload();

            });
    }
    function setColor(o){
        if($("#"+o).val()=="Chờ mổ"){
            $("#"+o).css("background-color","yeallow");
        }
        else if($("#"+o).val()=="Đã chuyển mổ"||$("#"+o).val()=="Đã chuyển về khoa CTCH" ){
            $("#"+o).css("background-color","#01a89e");
        }
        else if( $("#"+o).val()=="Đang phẫu thuật phòng mổ VN"||$("#"+o).val()=="Đang phẫu thuật phòng mổ TT KTC"){
            $("#"+o).css("background-color","#2fa360");
        }
        else if( $("#"+o).val()=="Hậu phẫu tại phòng mổ"||$("#"+o).val()=="Chuyển khoa Tăng cường Ngoại"||$("#"+o).val()=="Chuyển khoa Tăng cường Nội"||$(o).val()=="Chuyển Trung tâm Kỹ thuật cao"){
            $("#"+o).css("background-color","gray");
        }
        else if( $("#"+o).val()=="Hoãn mổ"){
            $("#"+o).css("background-color","red");
        }
        else{
            $("#"+o).css("background-color","#ffffff");

        }
    }
    function deleteRecord(id){
        var _token=$('input[name="_token"]').val();

        var result = confirm("bạn có muốn xóa?");
        data={};
        data['id']=id;
        data['_token']=_token;
        if (result) {
            $.ajax({
                method: "POST",
                url: "{{asset('xuongkhop/delete')}}",
                data: data,
            })
                .success(function( msg ) {
                    $('#row_'+id).hide();
                    alert( "xóa thành công" );
                });
        }
    }
    function edit(a){
        var _token=$('input[name="_token"]').val();

        var data={'id':a,
        '_token':_token};
        $.ajax({
            method: "POST",
            url: "{{asset('xuongkhop/show')}}",
            data: data,
        })
            .success(function( data ) {
                $('#name2').val(data[0].tentuoi);
                $('#chandoan2').val(data[0].chandoan);
                $('#ppphauthuat2').val(data[0].ppphauthuat);
                $('#bsphauthuat2').val(data[0].ptv);
                $('#status3').val(data[0].trangthai);
                $('#id').val(data[0].id);

                $('#editModal').modal('show');
                setColor("status3");
            });
    }
    function truncate(){
        $.ajax({
            method: "POST",
            url: "{{asset('truncate')}}",
        })
            .success(function( data ) {
                alert("Xóa thành công")
                location.reload();

            });    }
    function editData(){
        var _token=$('input[name="_token"]').val();

        var data={};
        data['tentuoi']=$("#name2").val();
        data['chandoan']=$("#chandoan2").val()
        data['ppphauthuat']=$("#ppphauthuat2").val()
        data['bsphauthuat']=$("#bsphauthuat2").val()
        data['trangthai']=$("#status3").val()
        data['_token']=_token;

        data['id']=$('#id').val()
        $.ajax({
            method: "POST",
            url: "{{asset('xuongkhop/update')}}",
            data: data,
        })
            .success(function( data ) {
                alert("Sửa thành công")
                location.reload();

            });
    }
    function chuyentrang() {
        window.location.href="{{asset('xuongkhop/quangcao')}}";
    }

</script>


</body>

<!-- Mirrored from thevectorlab.net/flatlab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:46:27 GMT -->
</html>
