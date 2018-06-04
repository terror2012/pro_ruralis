<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Sign Up</title>

  <!-- Bootstrap CSS -->
  <link href="{{url('/admin/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('admin/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('admin/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{url('admin/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{url('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{url('admin/css/style-responsive.css')}}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="{{url('admin/js/html5shiv.js')}}"></script>
    <script src="{{url('admin/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    @include('flash::message')

    <div class="login-form">

      <div class="login-wrap">
          
        <p class="login-img"><i class="icon_lock_alt"></i></p>
     
          <div class="container">
          <h3 class="create">Alege tipul contului pe care vrei sa il deschizi</h3>
          </div>
       
          
        
          
       
        <a href="{{url('/register/student')}}"><button class="btn btn-primary btn-lg btn-block" >Elev</button></a>
        <a href="{{url('/register/sponsor')}}"><button class="btn btn-info btn-lg btn-block" >Sponsor</button></a>
      </div>
    </div>
    <div class="text-right">
      
    </div>
  </div>


</body> 
    

</html>
