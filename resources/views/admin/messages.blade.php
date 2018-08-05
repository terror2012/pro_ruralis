<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Mesaje</title>
  <!-- Bootstrap core CSS-->
  <link href="{{url_admin('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{url_admin('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{url_admin('css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{url_admin('css/messages.css')}}" rel=stylesheet>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>



<body class="sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->

  @include('layouts.admin.navbar')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Messages
            </li>
        </ol>
      
      <!--messages -->

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="btn-panel btn-panel-conversation">
                <input class="form-control" type="text" name="search" id="search" placeholder="Search">
                    <button id="new_msg" name="new_msg"><i class="fa fa-plus"></i> New Message</button>
        </div>
    </div>
    <div class="row">

        <div class="conversation-wrap col-lg-3">

            @foreach(array_sort($senders, 'last_sent_at', SORT_DESC) as $key=>$sender)
            <div id="messages_thumbs">
                <div onclick="alert('test');" class="media conversation">
                    <div class="media-body">
                        <h5 class="media-heading">{{$sender['name']}}</h5>
                        <small>{{$sender['last_subject']}}</small>
                    </div>

                </div>
                </div>
            @endforeach
        </div>



        <div class="message-wrap col-lg-8">
            <div class="msg-wrap">



                @foreach($sender_history as $message)
                    <div class="media msg ">
                        <div class="media-body" style="width: 610px;">
                            <small class="pull-right time"><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</small>
                            <h5 class="media-heading">{{$message->sender->name}}</h5>
                            <small class="col-lg-10">{{$message->body}}</small>
                        </div>
                    </div>
                    @endforeach

            </div>

            <div class="send-wrap ">

                <textarea class="form-control send-message" rows="3" placeholder="Write a reply..."></textarea>


            </div>
            <div class="btn-panel">
                <a href="" class=" col-lg-3 btn   send-message-btn " role="button"><i class="fa fa-cloud-upload"></i> Add Files</a>
                <a href="" class=" col-lg-4 text-right btn   send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> Send Message</a>
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../../../../../../Users/Cristian/Desktop/startbootstrap-sb-admin-gh-pages/login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{url_admin('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url_admin('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{url_admin('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{url_admin('js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </div>
</body>

</html>
