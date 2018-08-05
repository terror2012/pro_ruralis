<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="{{url_admin('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{url_admin('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{url_admin('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{url_admin('css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->

@include('layouts.admin.navbar')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="container-fluid">
            <div class="row">
               @foreach($news as $new)
                <div class="col-md-4">
                    <h3>
                        h3. Lorem ipsum dolor sit amet.
                    </h3><img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
                    <p>
                        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                    </p>
                    <div class="btn-group" role="group">

                        <a href="{{url('/')}}"><button class="btn btn-secondary" type="button">
                                Edit
                            </button></a>
                        <a href=""><button class="btn btn-secondary" type="button">
                                Delete
                            </button></a>
                    </div>
                </div>
                @endforeach
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © {{url('/')}} 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{url_admin('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url_admin('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{url_admin('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{url_admin('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url_admin('vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url_admin('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{url_admin('js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{url_admin('js/sb-admin-datatables.min.js')}}"></script>
    <script src="{{url_admin('js/sb-admin-charts.min.js')}}"></script>
</body>

</html>
