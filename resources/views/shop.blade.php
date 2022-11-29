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
<section class="ftco-menu mb-5 pb-5">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0" role="tab" aria-controls="v-pills-0" aria-selected="true">Food</a>

                  <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false">Traditinal Dress</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Organic & Natural</a>

                  <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Accessories</a>
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
                      <div class="row">
                          <div class="col-md-3">
                                    <div class="menu-entry">
                                            <a href="product" class="img" style="background-image: url(https://i0.wp.com/2qlam.com/wp-content/uploads/2020/12/%D8%B7%D8%B1%D9%8A%D9%82%D8%A9-%D8%B9%D9%85%D9%84-%D8%A7%D9%84%D9%84%D8%A8%D9%86%D8%A9-%D8%A7%D9%84%D9%85%D9%83%D9%88%D8%B1%D8%A9-%D8%A8%D8%A7%D9%84%D8%B2%D9%8A%D8%AA.jpg?fit=780%2C460&ssl=1);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product">Circle Labaneh</a></h3>
                                                <p>A small river named Duden flows by their place and supplies</p>
                                                <p class="price"><span>$5.90</span></p>
                                                <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="menu-entry">
                                            <a href="product" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product">Coffee Capuccino</a></h3>
                                                <p>A small river named Duden flows by their place and supplies</p>
                                                <p class="price"><span>$5.90</span></p>
                                                <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="menu-entry">
                                            <a href="product" class="img" style="background-image: url(images/menu-3.jpg);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product">Coffee Capuccino</a></h3>
                                                <p>A small river named Duden flows by their place and supplies</p>
                                                <p class="price"><span>$5.90</span></p>
                                                <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="menu-entry">
                                            <a href="product" class="img" style="background-image: url(images/menu-4.jpg);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product">Coffee Capuccino</a></h3>
                                                <p>A small river named Duden flows by their place and supplies</p>
                                                <p class="price"><span>$5.90</span></p>
                                                <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                                            </div>
                                        </div>
                                </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <div class="row">
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(https://scontent.famm10-1.fna.fbcdn.net/v/t1.6435-9/118282458_3132530456794058_5564659017357243255_n.jpg?stp=dst-jpg_p960x960&_nc_cat=105&ccb=1-7&_nc_sid=36a2c1&_nc_ohc=6kMdakY6y7YAX8hN1gY&_nc_ht=scontent.famm10-1.fna&oh=00_AfCb3gXpec3W0j4LzLJaOSgJrjJ9Nc2u2e9auZyF0OYS5Q&oe=6399EAAA);"></a>
                                  <div class="text">
                                      <h3><a href="product">Grilled Beef</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dish-2.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Grilled Beef</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dish-3.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Grilled Beef</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dish-4.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Grilled Beef</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dish-5.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Grilled Beef</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dish-6.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Grilled Beef</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <div class="row">
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(https://i.ebayimg.com/images/g/gawAAOSwXYtY0ySC/s-l500.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Lemonade Juice</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          {{-- <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Pineapple Juice</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Soda Drinks</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/drink-4.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Lemonade Juice</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/drink-5.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Pineapple Juice</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div> --}}
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/drink-6.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Soda Drinks</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <div class="row">
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(http://cdn.shopify.com/s/files/1/1282/8807/products/57_1e73a75b-3285-4dbf-ad21-a75834f6be19_1024x1024.jpg?v=1572279893);"></a>
                                  <div class="text">
                                      <h3><a href="product">Hot Cake Honey</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dessert-2.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Hot Cake Honey</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dessert-3.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Hot Cake Honey</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dessert-4.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Hot Cake Honey</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dessert-5.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Hot Cake Honey</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="product" class="menu-img img mb-4" style="background-image: url(images/dessert-6.jpg);"></a>
                                  <div class="text">
                                      <h3><a href="product">Hot Cake Honey</a></h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                      <p class="price"><span>$2.90</span></p>
                                      <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

@endsection