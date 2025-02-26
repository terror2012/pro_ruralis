<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Galerie</title>
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

      @include('flash::message')

  </section><!-- #intro -->

  <main id="main">


  <main id="main">

   

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Galerie</h3>
          <span class="section-divider"></span>
          <p class="section-description">Selectati data si luna pentru a naviga in galerie</p>
        </div>

          <div class="date secttion description ">
          <div class="btn-group date-selector">
 <div class="dropdown ">
				 
				<select id="month" class="date-color dropdown-toggle btn btn-secondary form-control" id="sel1">
    <option value="01">Jan</option>
    <option value="02">Feb</option>
    <option value="03">Mar</option>
    <option value="04">Apr</option>
    <option value="05">May</option>
    <option value="06">Jun</option>
    <option value="07">Jul</option>
    <option value="08">Aug</option>
    <option value="09">Sep</option>
    <option value="10">Oct</option>
    <option value="11">Nov</option>
    <option value="12">Dec</option>
  </select>
				
			</div>
</div>
              <div class="btn-group date-selector">
 <div class="dropdown ">
				 
				<select id="year" class="date-color dropdown-toggle btn btn-secondary form-control" id="sel1">
    @foreach($years as $year)
                        <option value="{{$year['year']}}" @if($year['selected'] === true) selected="selected" @endif>{{$year['year']}}</option>
        @endforeach
  </select>
				
			</div>
</div>
          </div>
          
          
        <div id="image_wrapper" class="row no-gutters">

          @foreach($images as $gal)
            <div class="col-lg-4 col-md-6">
              <div class="gallery-item wow fadeInUp">
                <a href="{{url($gal['image'])}}" class="gallery-popup">
                  <img src="{{url($gal['image'])}}" alt="{{$gal['alt']}}">
                </a>
              </div>
            </div>
            @endforeach

        </div>

      </div>
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
   <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

            <div class="col-lg-4 col-md-4">
                <div class="contact-about">
                    <h3>Contact</h3>
                    <p>Asociatia „Pro Ruralis” Iasi <br> CF 14597970 <br> <b>Datele despre Conturile Asociatiei „Pro Ruralis”, deschise la Banca Comerciala Romana, Sucursala Iasi pot fi obtinute prin telefon.</b></p>
                    <div class="social-links">
                        @if($data['twitter']) <a href="{{$data['twitter']}}" class="twitter"><i class="fa fa-twitter"></i></a> @endif
                        @if($data['facebook']) <a href="{{$data['facebook']}}" class="facebook"><i class="fa fa-facebook"></i></a> @endif
                        @if($data['instagram']) <a href="{{$data['instagram']}}" class="instagram"><i class="fa fa-instagram"></i></a> @endif
                        @if($data['google']) <a href="{{$data['google']}}" class="google-plus"><i class="fa fa-google-plus"></i></a> @endif

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div>
                        <i class="ion-ios-location-outline"></i>
                        <p>{{$data['city']}}<br>{{$data['address']}}<br>{{$data['address2']}}<br>{{$data['room']}}</p>
                    </div>

                    <div>
                        <i class="ion-ios-email-outline"></i>
                        <p>{{$data['email']}}</p>
                    </div>

                    <div>
                        <i class="ion-ios-telephone-outline"></i>
                        <p>{{$data['phone']}}</p>
                    </div>

                </div>
            </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
                <form action="{{url('/contact')}}" method="post" class="contactForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

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

  <!-- Template Main Javascript File -->
  <script src="{{url('js/main.js')}}"></script>

  <script>
    $('#month').val('{{$current_month}}');
      var token = '{{csrf_token()}}';
      var api_link = '{{url('/gallery/api_images')}}';
  </script>
    <script src="{{url('/js/gallery_apis.js')}}"></script>
</body>
</html>
