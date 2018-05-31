<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Doneaza</title>
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
  <section id="intro">
    @include('flash::message')
    <div class="intro-text">
      <h2>Doneaza 2% pentru inteligenta!</h2>
      <p>Sa ajutam elevii sa isi implineasca visul</p>
       
   <!-- -->  <a href="#about" class="btn-get-started scrollto">Afla cum poti dona!</a> 
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Nu va consta nimic! 2% Pentru Inteligenta</h3>
          <span class="section-divider"></span>
          <p class="section-description squeze">
           Sprijiniti cei 90 de copii ai Asociatiei Pro Ruralis Iasi, cuprinsi in proiectul „Burse pentru elevii din mediul rural cu coeficient de inteligenta superior, provenit din familii defavorizate”. La fel ca in anii trecuti, Codul Fiscal pune la dispozitia contribuabililor mecanismul de redirectionare a 2% din impozitul pe venit datorat pentru anul 2016, catre o entitate non profit. Daca doriti sa sustineti (fara sa va  coste nici un leu in plus) cu infima suma de 2% din impozitul datorat statului pentru cei 94 de elevi supradotati cuprinsi in 13 licee de elita din Iasi, completati si depuneti Fisa 230 pana la data de 15 mai 2018 (in cazul trimiterii prin plic, data postei), Declaratia de venit global, parcurgand urmatorii pasi:
          </p> 
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    <section id="advanced-features">

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="{{url('img/advanced-feature-1.jpg')}}" alt="">
              <div class="wow fadeInLeft">
                <h2>Pasul 1</h2>
                <h3>Datele de identificare ale asociatiei:</h3>
                <ul class="heavy">
                  <li>{{$data['company_name']}}</li>
                    <li>{{$data['company_address']}}</li>
                    <li>Cod de identificare fiscala: {{$data['cod_fiscal']}};</li>
                    <li>Cont bancar la {{$data['bank_type']}} Iasi: {{$data['bank_account']}}</li>
                    <li>Persoana de contact: {{$data['contact_person_name']}}, tel {{$data['contact_person_phone']}}</li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="{{url('img/advanced-feature-2.jpg')}}" alt="">
              <div class="wow fadeInRight">
                <h2>Pasul 2</h2>
                <h3>Completarea Fisei</h3>
                  <p class="heavy">Alaturi de Declaratia de venit global obtinuta de la administratia financiara de care apartineti (sau descarcata de pe internet de la adresa  www.anaf.ro) completati si cererea privind destinatia sumei repezentand pana la 2% din impozitul anual, F 230 punctul A şi B. Suma va fi calculata in mod automat de catre Administratia Financiara.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="{{url('img/advanced-feature-3.jpg')}}" alt="">
              <div class="wow fadeInLeft">
                <h2>Pasul 3</h2>
                <p class="heavy">Depunerea declaratiei de venit global: Declaratia se poate depune direct la Administraţia Financiara, sau se poate trimite prin posta pana cel tarziu pe 15 mai 2018 la adresa: Directia Generala a Finantelor Publice, Str. Anastasie Panu nr. 26, Iasi, Cod 700020, tel. 0232.210005; 0232.219470.</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #advanced-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
            <h2 class="cta-title align-center">La ce foloseste procentul de 2%?     </h2>
            <p class="cta-text heavy"> Infima suma de 2 %, redirectionata de la stat in folosul asociatiei, ajuta niste copii supradotati sa-si continue studiile, sa-si faureasca un viitor. Cumulati, banii de la mai multe persoane desi par putini, contribuie la o hrana mai buna, un premiu de sfarsit de an, o participare la concursuri scolare, sau la plata mesei si a cazarii. Pe langa Asociatia Pro Ruralis Iasi puteti alege sa ajuti oricare alta organizatie non-profit, care considerati ca merita increderea dumnavoastra. Este dreptul dumneavostra de a alege! Suma de 2 % din impozitul dumneavoastra, oricum platit statului, inseamna conditii mai bune pentru 90 de copii inteligenti de la tara.  Avem nevoie de sustinere pentru un proiect pe care multi dintre dumneavoastra il cunoasteti. Suntem spre finalul celui de al treisprezecelea an de functionare de cand derulam prin Asociatia „Pro Ruralis” o actiune premiera in Romania din anul  2001.</p>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->


    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Intrebari Frecvente</h3>
        </div>

        <ul id="faq-list" class="wow fadeInUp">

          @foreach($data['faq'] as $faq)
            <li>
              <a data-toggle="collapse" class="collapsed" href="#faq{{$faq['id']}}">{{$faq['title']}} <i class="ion-android-remove"></i></a>
              <div id="faq{{$faq['id']}}" class="collapse" data-parent="#faq-list">
                <p>
                  {{$faq['body']}}
                </p>
              </div>
            </li>
            @endforeach

        </ul>

      </div>
    </section><!-- #faq -->

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

</body>
</html>
