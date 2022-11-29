@extends('layout.master')
@section('content')
<style>
    .ftco-navbar-light .navbar-brand{
      color: #343a40;
    }
    #ftco-navbar :hover{
    color:aliceblue;
      }
    
    .navbar-brand small {
      color: #343a40;
    }
        .ftco-navbar-light{
            background: #679692eb !important;
        }
        .ftco-navbar-light .navbar-nav > .nav-item.cart > a .icon{
        color:#4e4747;
      }
        .ftco-navbar-light .navbar-nav > .nav-item > .nav-link{
            color:#000;
        }
        span{
            color:#343a40;
        }
        body{
          color:#101010;
        }
        h3,h2{
          color:#000;
        }
        .menu-entry .text h3 a {
           color: #000;
        }
        .menu-entry .text .price span{
            color:#000;
        }
        .menu-wrap .text h3 a {
            color:#000;

        }
        .menu-wrap .text .price span{
            color:#000;

        }
        .ftco-menu .nav-pills .nav-link{
            border: 1px solid #679692;
            color: #343a40;
        }

        </style>
<section class="ftco-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="https://i0.wp.com/2qlam.com/wp-content/uploads/2020/12/%D8%B7%D8%B1%D9%8A%D9%82%D8%A9-%D8%B9%D9%85%D9%84-%D8%A7%D9%84%D9%84%D8%A8%D9%86%D8%A9-%D8%A7%D9%84%D9%85%D9%83%D9%88%D8%B1%D8%A9-%D8%A8%D8%A7%D9%84%D8%B2%D9%8A%D8%AA.jpg?fit=780%2C460&ssl=1" class="image-popup"><img src="https://i0.wp.com/2qlam.com/wp-content/uploads/2020/12/%D8%B7%D8%B1%D9%8A%D9%82%D8%A9-%D8%B9%D9%85%D9%84-%D8%A7%D9%84%D9%84%D8%A8%D9%86%D8%A9-%D8%A7%D9%84%D9%85%D9%83%D9%88%D8%B1%D8%A9-%D8%A8%D8%A7%D9%84%D8%B2%D9%8A%D8%AA.jpg?fit=780%2C460&ssl=1" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>Circle Labaneh</h3>
                <p class="price"><span>$4.90</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                  <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                      <option value="">Small</option>
                    <option value="">Medium</option>
                    <option value="">Large</option>
                    <option value="">Extra Large</option>
                  </select>
                </div>
                </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                 <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                   <i class="icon-minus"></i>
                    </button>
                    </span>
                 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                 <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                     <i class="icon-plus"></i>
                 </button>
                 </span>
              </div>
          </div>
          <p><a href="cart.html" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Discover</span>
        <h2 class="mb-4">Related products</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section>
@endsection