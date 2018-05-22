<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Avilon Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{url('img/favicon.png')}}" rel="icon">
  <link href="{{url('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
@include('layouts.navbar')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro_despre_noi">




  </section>

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg white">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Despre Noi</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Scurt istoric al organizatiei<br>
          </p>
        </div>

        <div class="row">
          <div class="about-img wow fadeInLeft">
            <img src="{{url($data['about_pic'])}}" alt="">
          </div>
        </div>
          <div class="row">
          <div class="col-lg-12 history content wow fadeInRight">
            @php echo html_entity_decode($data['about_us']) @endphp
              </div>
              
          </div>
          
      </div>
        
    </section><!-- #about -->

    <!--==========================
      Product Advanced Featuress Section
    ============================-->
      
    <section id="advanced-features">

      @foreach($data['objectives'] as $obj)
        <div class="features-row @if($obj['id'] % 2 == 0) @else section-bg @endif">
          <div class="row">

            @if($obj['id'] == 1)
              <div class="col-lg-12 history content wow fadeInRight scopul_organizatiei">
                <h2>Scopul organizatiei</h2>
              </div>
              @endif

          </div>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <img class="advanced-feature-img-right wow @if($obj['id'] % 2 == 0) fadeInLeft @else fadeInRight @endif" src="{{url($obj['image'])}}" alt="">
                <div class="wow fadeInLeft">


                  <h2>{{$obj['title']}}</h2>


                  <p> @php echo html_entity_decode($obj['description']) @endphp
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </section>

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Structura organizationala</h3>
          <span class="section-divider"></span>
          <p class="section-description"></p>
        </div>
        <div class="row wow fadeInUp">
          @foreach($data['staff'] as $staff)
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{url($staff['img'])}}" alt=""></div>
                        <h4>{{$staff['name']}}</h4>
                        <span>{{$staff['title']}}</span>
                    </div>
                </div>
              @endforeach









        </div>

      </div>
    </section><!-- #team -->


  </main>

  <!--==========================
    Footer
  ============================-->
@include('layouts.footer')

  <!-- JavaScript Libraries -->
  <script src="{{url('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('lib/easing/easing.min.js')}}"></script>
  <script src="{{url('lib/wow/wow.min.js')}}"></script>
  <script src="{{url('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{url('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{url('lib/magnific-popup/magnific-popup.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{url('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('js/main.js')}}"></script>

</body>
</html>
