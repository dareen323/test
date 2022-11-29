@extends('layout.master')
@section('content')
<style>
   h3,h2,h4,h5{
   color:#000;
   }
   span{
   color:#000;
   }
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
{{-- <section class="home-slider owl-carousel">
   <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
         <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
               <h1 class="mb-3 mt-5 bread">Cart</h1>
               <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            </div>
         </div>
      </div>
   </div>
</section> --}}
<section class="ftco-section ftco-cart mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ftco-animate">
            <div class="cart-list">
               <table class="table">
                  <thead class="thead-primary">
                     <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
                        <td class="image-prod">
                           <div class="img" style="background-image:url(images/menu-2.jpg);"></div>
                        </td>
                        <td class="product-name">
                           <h3>Creamy Latte Coffee</h3>
                           <p>Far far away, behind the word mountains, far from the countries</p>
                        </td>
                        <td class="price">$4.90</td>
                        <td class="quantity">
                           <div class="input-group mb-3">
                              <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                           </div>
                        </td>
                        <td class="total">$4.90</td>
                     </tr>
                     <!-- END TR-->
                     <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
                        <td class="image-prod">
                           <div class="img" style="background-image:url(images/dish-2.jpg);"></div>
                        </td>
                        <td class="product-name">
                           <h3>Grilled Ribs Beef</h3>
                           <p>Far far away, behind the word mountains, far from the countries</p>
                        </td>
                        <td class="price">$15.70</td>
                        <td class="quantity">
                           <div class="input-group mb-3">
                              <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                           </div>
                        </td>
                        <td class="total">$15.70</td>
                     </tr>
                     <!-- END TR-->
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div class="row justify-content-end">
         <div class="col col-lg-4 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
               <h3>Cart Totals</h3>
               <p class="d-flex">
                  <span>Subtotal</span>
                  <span>$20.60</span>
               </p>
               <p class="d-flex">
                  <span>Delivery</span>
                  <span>$0.00</span>
               </p>
               <p class="d-flex">
                  <span>Discount</span>
                  <span>$3.00</span>
               </p>
               <hr>
               <p class="d-flex total-price">
                  <span>Total</span>
                  <span>$17.60</span>
               </p>
            </div>
            <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
         </div>
      
      <div class="col col-lg-8 col-md-6 mt-5 cart-wrap ftco-animate">
         <form action="#" class="billing-form ftco-bg-light p-3 p-md-5" style="border:1px solid rgb(31, 29, 29)">
            <h3 class="mb-4 billing-heading">Billing Details</h3>
            <div class="row align-items-end">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="firstname">Firt Name</label>
                     <input type="text" class="form-control" placeholder="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="lastname">Last Name</label>
                     <input type="text" class="form-control" placeholder="">
                  </div>
               </div>
               <div class="w-100"></div>
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="country">State / Country</label>
                     <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                           <option value="">France</option>
                           <option value="">Italy</option>
                           <option value="">Philippines</option>
                           <option value="">South Korea</option>
                           <option value="">Hongkong</option>
                           <option value="">Japan</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="w-100"></div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="streetaddress">Street Address</label>
                     <input type="text" class="form-control" placeholder="House number and street name">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
                  </div>
               </div>
               <div class="w-100"></div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="towncity">Town / City</label>
                     <input type="text" class="form-control" placeholder="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="postcodezip">Postcode / ZIP *</label>
                     <input type="text" class="form-control" placeholder="">
                  </div>
               </div>
               <div class="w-100"></div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="phone">Phone</label>
                     <input type="text" class="form-control" placeholder="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="emailaddress">Email Address</label>
                     <input type="text" class="form-control" placeholder="">
                  </div>
               </div>
               <div class="w-100"></div>
               <div class="col-md-12">
                  <div class="form-group mt-4">
                     <div class="radio">
                        <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
                        <label><input type="radio" name="optradio"> Ship to different address</label>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <!-- END -->
         <div class="row mt-5 pt-3 d-flex">
            
            <div class="col-md-6">
               <div class="cart-detail ftco-bg-light p-3 p-md-4">
                  <h3 class="billing-heading mb-4">Payment Method</h3>
                  <div class="form-group">
                     <div class="col-md-12">
                        <div class="radio">
                           <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <div class="radio">
                           <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <div class="radio">
                           <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-12">
                        <div class="checkbox">
                           <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                        </div>
                     </div>
                  </div>
                  <p><a href="#" class="btn btn-primary py-3 px-4">Place an order</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</section>
{{-- 
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
--}}
<script src="../../js/main12.js"></script>
@endsection