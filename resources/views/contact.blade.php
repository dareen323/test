@extends('layout.master')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('https://html.tonatheme.com/2022/tayler/assets/images/main-slider/image-1.jpg">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">
          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Contact Us</h1>
            <p class="breadcrumbs">
              <span class="mr-2"><a href="index.php">Home</a></span>
              <span>Contact</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container mt-5">
      <div class="row block-9">
        <div class="col-md-4 contact-info ftco-animate fadeInUp ftco-animated">
          <div class="row">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            <div class="col-md-12 mb-3">
              <p>
                <span >Address:</span> Amman, Jordan.
              </p>
            </div>
            <div class="col-md-12 mb-3">
              <p>
                <span>Phone:</span>
                <a href="tel://1234567920">+ (962) 776 789012</a>
              </p>
            </div>
            <div class="col-md-12 mb-3">
              <p>
                <span>Email:</span>
                <a href="mailto:info@yoursite.com">Sewinghouse2022@jazz.com</a>
              </p>
            </div>
            <div class="col-md-12 mb-3">
              <p><span>Website:</span> <a href="/">Sewing House Website</a></p>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-1"></div> --}}
        <div class="col-md-8 ftco-animate fadeInUp ftco-animated">
          <form action="#" class="contact-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email" required="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject" required="">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" required="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection