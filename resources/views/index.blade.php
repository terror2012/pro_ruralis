<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Proruralis</title>
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

  <!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">

      @include('flash::message')

      <h2>{{$data['header1']}}</h2>
      <p>{{$data['header2']}}</p>
   <!--   <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Despre Pro Ruralis<br>
            <small>Proiectul Derulat</small></h3>
          <span class="section-divider"></span>
          <p class="section-description">
            ”Burse pentru elevi din mediul rural cu un coeficient de inteligenta superior, provenind din familii defavorizate”.<br>
            
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="img/pencil.jpg" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>Misiunea Noastra</h2>
       
            <p>
              {{$data['mission']}}
            </p>
              
              <h2>Cunoasterea Asociatiei</h2>
 <p>
              Pentru popularizarea activitatii asociatiei ne-am propus si am reusit sa obtinem pana in anul 2018, la nivel de tara, 7 diplome, trofee si premii luate la Galele Societatii Civile, Gala Oameni pentru Oameni, Gala Inimi de Romani sau la Galele de Excelenta de la Iasi.<br>
Categoriile pentru care s-au luat premii si trofee au fost:
            </p>
            <ul>
              @foreach($data['categ_prize'] as $prize)
                    <li><i class="ion-android-checkmark-circle"></i>{{$prize}}</li>
              @endforeach
                
            </ul>

           
          </div>
        </div>

      </div>
    </section><!-- #about -->
      
      
      <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Noutati</h3>
          <span class="section-divider"></span>
         <!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
        </div>

        <div class="row">

          @foreach($data['news'] as $news)
            <div class="col-lg-4 col-md-6">
              <div class="box wow fadeInLeft">
                <h3>{{$news['title']}}</h3>
                <img class="thumb" src="{{url($news['image'])}}" alt="" width="200px" height="150px">

                <p>
                  {{($news['post'])}}
                </p>
                <a href="{{url('/post='.$news['id'])}}" class="get-started-btn">Citeste mai mult</a>
              </div>
            </div>
            @endforeach

        </div>
      </div>
    </section><!-- #pricing -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Criterii de Selectie</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="img/lightbulb.png" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                <h4 class="title"><a href="">Media 10 la purtare</a></h4>
                <p class="description"></p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                <h4 class="title"><a href="">IQ minim 120</a></h4>
                <p class="description"></p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight data-wow-delay="0.2s>
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Provenienta din familii defavorizate</a></h4>
                <p class="description">*conform anchetelor sociale</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Media de admitere la liceu minim 9</a></h4>
                <p class="description"></p>
              </div>
            </div>

          </div>

        </div>

      </div>
                                      
    </section><!-- #features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Doneaza 2% pentru inteligenta!</h3>
            <p class="cta-text"> Sprijiniti cei 90 de copii ai Asociatiei Pro Ruralis Iasi, cuprinsi in proiectul „Burse pentru elevii din mediul rural cu coeficient de inteligenta superior, provenit din familii defavorizate”. La fel ca in anii trecuti, Codul Fiscal pune la dispozitia contribuabililor mecanismul de redirectionare a 2% din impozitul pe venit datorat pentru anul 2016, catre o entitate non profit. Daca doriti sa sustineti (fara sa va  coste nici un leu in plus) cu infima suma de 2% din impozitul datorat statului pentru cei 94 de elevi supradotati cuprinsi in 13 licee de elita din Iasi, completati si depuneti Fisa 230 pana la data de 15 mai 2018 (in cazul trimiterii prin plic, data postei), Declaratia de venit global, parcurgand urmatorii pasi:</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Doneaza!</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
</div>
    <!--==========================
      Clients
    ============================-->
    <section id="clients">
        <div class="section-header">
          <h3 class="section-title">Parteneri</h3>
          <span class="section-divider"></span>
        </div>
      <div class="container">

        <div class="row wow fadeInUp">

          @foreach($data['partners'] as $key=>$value)
                <div class="col-md-2">
                    <a href="{{$value}}"><img src="{{url($key)}}" alt=""></a>
                </div>
          @endforeach

        </div>
      </div>
    </section><!-- #more-features -->

    


    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    

   

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Evenimente</h3>
          <span class="section-divider"></span>
          <p class="section-description"></p>
        </div>

        <div class="row no-gutters">

          @foreach($events as $event)
            <div class="col-lg-4 col-md-6">
              <div class="gallery-item wow fadeInUp">
                <a href="{{url($event['image'])}}" class="gallery-popup">
                  <img src="{{url($event['image'])}}" alt="{{$event['alt']}}">
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
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
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
    
  <!-- Custom Javascript -->

</body>
</html>
