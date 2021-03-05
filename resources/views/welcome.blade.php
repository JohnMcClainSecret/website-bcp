@extends('layouts.template')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Business Consultant Prime</span></h2>
                <p class="animate__animated animate__fadeInUp">There's much to see here. So, take your time, look around, and learn all there is to know about us. We hope you enjoy our site and take a moment to drop us a line.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('img/slide/banner2.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <p class="animate__animated animate__fadeInUp">FIND YOUR NEXT PROPERTY!</p>
                <h2 class="animate__animated animate__fadeInDown">An agent you can believe in</h2>
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
    @if(session('status'))
        <div class="alert alert-success" id="msgAlert" style="width: 500px; margin-left: 350px" id="alert">
            {{ session('status') }}
        </div>
    @endif
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
            <div class="col-lg-6 video-box">
                <img src="img/aboutus.jpg" class="img-fluid" alt="">
                <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
            </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <p>If you feel you have been lied to, misled, or pressured into buying your Real Estate or timeshare, you have the right to get rid of your property. Last year, over 150,000 people reached out to us for help and we transfered nearly $50,000,000.00 in property profit. So, what does that mean for you? It means we know how to get you out of an uneasy situation successfully which in return gives you peace of mind.<br>
                We are here to help you!</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section =======
    <section id="services" class="services about-lists">
        <div class="container">

          <div class="row no-gutters">

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
              <span>01</span>
              <h4>If you have question</h4>
              <p>Nervous about your property adventure? Don’t be. Whether you're getting ready to buy or sell, in the middle of it, or just looking for some answers, our top-notch skills ensure you get the best experience possible. It’s what we love to do. </p>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
              <span>02</span>
              <h4>Commercial, Residential, and Rentals</h4>
              <p>Large or small, condo or mansion, we can find it and get it for you at the price that's right. TICs? Fixer-uppers? Luxury? We can help with all of it. We always have a current list of available properties for you to check out.</p>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
              <span>03</span>
              <h4>Real Estate Done Right</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>

          </div>

        </div>
    </section>End About Lists Section -->

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
                <h4 class="title"><a href="">Commercial, Residential, and Rentals</a></h4>
                <p class="description">Large or small, condo or mansion, we can find it and get it for you at the price that's right. TICs? Fixer-uppers? Luxury? We can help with all of it. We always have a current list of available properties for you to check out.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                <h4 class="title"><a href="">Real Estate Done Right</a></h4>
                <p class="description">Nervous about your property adventure? Don’t be. Whether you're getting ready to buy or sell, in the middle of it, or just looking for some answers, our top-notch skills ensure you get the best experience possible. It’s what we love to do. </p>
                </div>
                <!--<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="icofont-image"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-settings"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <div class="icon"><i class="icofont-tasks-alt"></i></div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>-->
            </div>
        </div>
    </section><!-- End Services Section -->

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
                <p>contact@businessconsultantprimebrokers.com</p>
              </div>
            </div>

            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box ">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>13123130440</p>
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
                    {{-- <div class="mb-3">
                        <div class="loading">Loading</div>
                        {{-- <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> --}}
                    <div class="text-center">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                {!! Form::close() !!}

              {{-- @if(Session::has('payload'))
                <div class="mt-3 alert alert-primary" role="alert">
                    <h5>{{ Session::get('payload') }}</h5>
                </div>
              {{ Session::forget('payload') }}
            @endif --}}
            </div>
          </div>

        </div>
    </section><!-- End Contact Us Section -->

  </main>
@endsection

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function onSubmit(token) {
          document.getElementById("demo-form").submit();
        }

        $(document).ready(function(){
            setTimeout(function() {
                $("#msgAlert").fadeOut();
            },3500);
        })
    </script>

@endsection