@php
    use \Carbon\Carbon;
@endphp
@extends('layouts.template')

@section('content')
    @if(session('status'))
        <div class="alert alert-success" id="msgAlert" style="width:100%; " id="alert">
            {{ session('status') }}
        </div>
    @endif
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('img/slide/banner1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Business Consultant Prime</span></h2>
                <p class="animate__animated animate__fadeInUp">There's much to see here. So, take your time, look around, and learn all there is to know about us. We hope you enjoy our site and take a moment to drop us a line.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('img/slide/banner2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <p class="animate__animated animate__fadeInUp">SELL YOUR TIMESHARE!</p>
                <h2 class="animate__animated animate__fadeInDown">A broker you can trust</h2>
                <p class="animate__animated animate__fadeInUp">We work with owners from all different brands and ownership
                    clubs to sell or rent in a quick and efficient manner.
                </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          {{-- <div class="carousel-item" style="background-image: url('img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div> --}}

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
            <div class="col-lg-6 video-box" style="margin-top: 25px">
                <img src="{{ asset('img/5.jpeg')}}" class="img-fluid" alt="">
                <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
            </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <p>Over the last 10 years our main focus has been creating opportunities for mutual resale
                  and purchase prospects.
              </p> <br>
              <p>
                  With our marketing techniques we target global qualified buyers to our site and accomplish
                  satisfactory transactions.
              </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="icofont-question"></i></div>
                <h4 class="title"><a href="">If you have question</a></h4>
                <p class="description">Nervous about your property adventure? Don’t be. Whether you're getting ready to buy or sell, in the middle of it, or just looking for some answers, our top-notch skills ensure you get the best experience possible. It’s what we love to do. </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="icofont-building-alt"></i></div>
                <h4 class="title"><a href="">Resales and Rentals</a></h4>
                <p class="description">What type of memberships can be sold:
                    <ul>
                        <li style="margin-left: -135px">RCI</li>
                        <li style="margin-left: -135px">HSI</li>
                        <li>All well known resorts</li>
                    </ul>
                </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="icofont-handshake-deal"></i></div>
                <h4 class="title"><a href="">Timeshare resale done right</a></h4>
                <p class="description">We believe in bridging the gap between a prospect seller and an interested buyer
                    and in creating opportunity for mutually beneficial partnerships where none has a previously existed.</p>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="section-title">
                <h2>How do you sell your RCI or HSI timeshare</h2>
                <p>When potential buyers see that your timeshare is affiliated with RCI or HSI, they see the value
                    in it immediately due to the affiliation and the possibility of exchanging accommodations to visit
                    different parts of the world every year.
                </p>
            </div>
        </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Offer Table======= -->
    <section >
        <div class="container justify-content-center" data-aos="fade-up">
          <div class="row no-gutters">
            <div class="content col-xl-4 d-flex justify-content-center" style="align-items: center">
              <div class="content">
                <h3 style="color: #5c768d">Live Offer Feed</h3>
                <p style="text-align: justify">
                    Through our live offer feed we share with you our closed deals in real time.
                </p>
                <a href="{{ url('getanoffer')}}" class="about-btn"><span>Get and offer</span> <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-xl-8 d-flex justify-content-center">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row table-offer">
                    <table class="table table-hover" >
                        <thead >
                            <tr>
                                <th style="color: #5c768d">Resort Name</th>
                                <th style="color: #5c768d">Type</th>
                                <th style="color: #5c768d">Offer</th>
                                <th style="color: #5c768d">Time Of Offer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($offers)
                                @foreach ($offers as $offer)
                                    @php
                                        // $now = Carbon::now();
                                        // $created = Carbon::parse($offer->created_at);
                                        // $diff = $created->diffForHumans($now);
                                        $date = Carbon::parse($offer->TimeOffer)->format('m-d-Y');
                                    @endphp
                                    <tr>
                                        <td>{{ $offer->ResortName}} </td>
                                        <td>{{$offer->Type}}</td>
                                        <td>$ {{$offer->Offer}}</td>
                                        <td> {{$date}}</td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
    </section><!-- End About Section -->
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Contact Us</h2>
          </div>

          <div class="row">

            <div class="col-lg-4 d-flex align-items-stretch" >
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>199 Water Street, New York, New York, 10038</p>
              </div>
            </div>

            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p >contact@businessconsultantprimebrokers.com</p>
              </div>
            </div>

            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box ">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>212 4611062</p>
              </div>
            </div>

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                {!! Form::open(['url'=>'submitContact',  'class'=>"php-email-form"]) !!}
                    <div class="form-row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" style="resize: none" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                    </div>
                    {!! Form::hidden('Token', '', ['id'=>'token']) !!}
                    <div class="text-center">
                        <button class="btn btn-info" data-action='submit' >Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
          </div>

        </div>
        <div class="justify-content-center">
            <div class="col-xl-12" style="margin-top: 50px">
                {{-- style="margin: 30px 200px " --}}
                <div class="owl-carousel clients-carousel row" >
                    <div class="col-md-3 col-sm-6 my-3 responsive">
                        <img style="margin-left: 30px" src="img/timeshare.png" alt="">
                    </div>
                    <div class="col-md-3 col-sm-6 my-3 responsive1 ">
                        <img style="margin-left: 30px" src="img/caa.png" alt="">
                    </div>
                    <div  class="col-md-3 col-sm-6 my-3 responsive responsive2">
                        <img style="margin-left: 30px" src="img/tbs.png" alt="">
                    </div>
                    <div  class="col-md-3 col-sm-6 my-3 responsive1">
                        <img style="margin-left: 30px" src="img/inc.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Us Section -->

  </main>
@endsection

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render=6LdmqHEaAAAAANPhgR5iJ2-kq2SeiSzSNu4RM0B9"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdmqHEaAAAAANPhgR5iJ2-kq2SeiSzSNu4RM0B9', {action: 'homepage'}).then(function(token) {
                document.getElementById('token').value = token;
            });
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#msgAlert').fadeIn();
            setTimeout(function() {
                $("#msgAlert").fadeOut();
            },2500);
        })
    </script>
@endsection
