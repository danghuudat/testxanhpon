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
    <base href="{{asset('login')}}/">


    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">



    <!-- Custom CSS -->
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('css/my.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.css')}}" />

    <!--right slidebar-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>


    <![endif]-->
</head>

<body>


<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<body>
<div class="container">

    <!-- slider -->
    <div class="row carousel-holder" >
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default" style="border: 1px solid #ddd">
                <div class="panel-heading" style="background-color: #f5f5f5">Đăng nhập</div>
                <div class="panel-body">
                    <form  action="{{asset('login')}}" method="post">
                        <div>
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" placeholder="Tên đăng nhập" name="name"
                            >
                        </div>
                        <br>
                        <div>
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Đăng nhập
                        </button>
                        {{csrf_field()}}

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <!-- end slide -->
</div>
</body>
<script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/data-tables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/data-tables/jquery.dataTables.js')}}" ></script>

<!--right slidebar-->
<script src="{{asset('js/slidebars.min.js')}}"></script>

<!--common script for all pages-->
<script src="{{asset('js/slidebars.min.js')}}"></script>

<!--script for this page only-->
<script src="{{asset('js/slidebars.min.js')}}"></script>

<!-- END JAVASCRIPTS -->


</body>

</html>
