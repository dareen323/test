@extends('layout.master')
@section('content')

<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

<style>
      

	.html ,.body{
		background-color:white !important;
		background:white !important;
	}
	#ara {
		overflow: hidden;
	}

	#imgpic:hover {

		transform: scale(1.1);
	}

	.ftco-services1, .ftco-gallery {
	background-color:#f6f5f5;
   }
   .body{
	background-color:white;
	color:white;
   }
   .btn.btn-primary{
	    background:#679692 ;
    border: 1px solid #679692;
    color: #000;
   }
   .heading-section .subheading{
	color:#679692;
   }
   h2{
	color:#679692;
   }
   .listing-item .listing-item-content .category{
   font-size: 12px;
    display: inline-block;
    padding: 5px 30px;
    background: #efba6c;
    border-radius: 30px;
    color: #fff;
    letter-spacing: .2em;
    text-transform: uppercase;}
	.listing-item:after {
    position: absolute;
    content: "";
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: 1;
    /* background:rgba(0, 0, 0, 0.042); */
}
	.listing-item .listing-item-content {
    position: absolute;
    bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    z-index: 2;
    width: 100%;
    text-align: center;}
	.listing-item .listing-item-content h2{
		font-size:18px;
		color:white;
	}
	.listing-item-content h2 a {
    color: #fff;}

</style>
</head>

{{--  --}}
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1613076321656-23dcdd3aea92?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome to Sewing House</span>
                    <h1 class="mb-4">Design Your Suit
                        Online</h1>
                    <p class="mb-4 mb-md-5">
                      Don’t Stress About The Dress, We’ll Dress You To Impress.

                    </p>
                    <p>
                    <a href="tails" class="btn btn-primary text-white py-3 px-4">Book Now !</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(https://images.pexels.com/photos/3814539/pexels-photo-3814539.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome to Sewing House</span>
                    <h1 class="mb-4">Measure Twice. Cut Once. Curse. Repeat.
                    </h1>
                    <p class="mb-4 mb-md-5">
                      Make People Fall In Love With Your Clothes.
                    </p>
                    <p>
                    <a href="tails" class="btn btn-primary text-white py-3 px-4">Book Now !</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('https://images.unsplash.com/photo-1533758488827-1ed0f9b03899?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome to Sewing House</span>
                    <h1 class="mb-4">OUR PERSONAL QUALITY TAYLER</h1>
                    <p class="mb-4 mb-md-5">
                      Certain clothes do seem to be beneficial. In Social Psychological and Personality Science, participants were asked to show up wearing either formal or casual clothes. 
                    </p>
                    <p>
                    <a href="tails" class="btn btn-primary text-white py-3 px-4">Book Now !</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--  --}}
<section class="ftco-section ">
  <div class="container"> 
    <div class="d-flex justify-content-center mb-5">
    <h2>Fashion Is Architecture </h2>
    </div>
    <div class="column section-three-block justify-content-center">   
  
   
      <div class="d-flex justify-content-around mb-5" style="visibility: visible;">
              
        
        
        <div class="dt-sc-support-block text-center ">    
          
          <div class="dt-sc-support-icon-image">            
            <img class="lazyautosizes ls-is-cached lazyloaded" data-src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-1_200x200.png?v=1613781114" data-aspectratio="" data-sizes="auto" alt="" sizes="78px" src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-1_200x200.png?v=1613781114">            
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-1_480x480@2x.png?v=1613781114" class="dt-sc-noscript-image" />
            </noscript>
          </div>
               
          <div class="dt-sc-support-content">
              
            <h5 class="dt-sc-support-heading">Individual Speech</h5>
             
              
            {{-- <p class="dt-sc-support-description"> Morbi facilisis, sem id placerat ultricies, leo lacus euismod urna, ut venenatis leo erat ut urna. Nulla eget condimentum</p> --}}
            
            
          </div>
        </div>
        
        
      <style>
        h4 , h5{
         color: #000;
        }
        .sub-title{
          position: relative;
    font-size: 14px;
    letter-spacing: 1px;
    line-height: 26px;
    color: #818188;
    font-weight: 400;
    font-family: "Crimson Text";
    text-transform: uppercase;
    margin-bottom: 10px;
        }
        @media screen and (max-width: 576px) {
  .de{
    display: none;
  }
  .welcome-section{
  padding: 5px !important;
 }
 }

      </style>
        
        <div class="dt-sc-support-block text-center ">    
          
          <div class="dt-sc-support-icon-image">            
            <img class="lazyautosizes ls-is-cached lazyloaded" data-src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-2_f6f4939f-cd3a-459b-aca5-9e1c2aca09ec_200x200.png?v=1613781767" data-aspectratio="" data-sizes="auto" alt="" sizes="78px" src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-2_f6f4939f-cd3a-459b-aca5-9e1c2aca09ec_200x200.png?v=1613781767">            
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-2_f6f4939f-cd3a-459b-aca5-9e1c2aca09ec_480x480@2x.png?v=1613781767" class="dt-sc-noscript-image" />
            </noscript>
          </div>
               
          <div class="dt-sc-support-content">
              
            <h5 class="dt-sc-support-heading">Made With Love</h5>
             
              
            {{-- <p class="dt-sc-support-description"> Ut fermentum posuere risus vel pulvinar. Sed vitae orci a nibh gravida aliquet non vel nibh. Donec accumsan ac tortor</p> --}}
            
            
          </div>
        </div>
        
        
        
        
        <div class="dt-sc-support-block text-center ">    
          
          <div class="dt-sc-support-icon-image">            
            <img class="lazyautosizes ls-is-cached lazyloaded" data-src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-3_200x200.png?v=1613781114" data-aspectratio="" data-sizes="auto" alt="" sizes="78px" src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-3_200x200.png?v=1613781114">            
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-3_480x480@2x.png?v=1613781114" class="dt-sc-noscript-image" />
            </noscript>
          </div>
               
          <div class="dt-sc-support-content">
              
            <h5 class="dt-sc-support-heading">Save Money</h5>
             
              
            {{-- <p class="dt-sc-support-description"> Donec suscipit dolor mauris, sit amet ornare risus ultricies id. Fusce sit amet nunc ex. Vivamus eget mauris marques ipsum</p> --}}
            
            
          </div>
        </div>
      </div>
        <div class="d-flex justify-content-around" style="visibility: visible;">

        
        
        <div class="dt-sc-support-block text-center ">    
          
          <div class="dt-sc-support-icon-image">            
            <img class="lazyautosizes lazyloaded" data-src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-4_200x200.png?v=1613781114" data-aspectratio="" data-sizes="auto" alt="" sizes="78px" src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-4_200x200.png?v=1613781114">            
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-4_480x480@2x.png?v=1613781114" class="dt-sc-noscript-image" />
            </noscript>
          </div>
               
          <div class="dt-sc-support-content">
              
            <h5 class="dt-sc-support-heading">Excellence Farbics</h5>
             
              
            {{-- <p class="dt-sc-support-description"> Aliquam feugiat, purus sed auctor sagittis, metus massa semper neque, vitae blandit nisi magna non elit varqwues elius ipsum marqu</p> --}}
            
            
          </div>
        </div>
        
        
        
        
        <div class="dt-sc-support-block text-center ">    
          
          <div class="dt-sc-support-icon-image">            
            <img class="lazyautosizes lazyloaded" data-src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-6_200x200.png?v=1613781114" data-aspectratio="" data-sizes="auto" alt="" sizes="78px" src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-6_200x200.png?v=1613781114">            
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-6_480x480@2x.png?v=1613781114" class="dt-sc-noscript-image" />
            </noscript>
          </div>
               
          <div class="dt-sc-support-content">
              
            <h5 class="dt-sc-support-heading">Perfect shape and fit</h5>
             
              
            {{-- <p class="dt-sc-support-description"> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat dolor tellus ispum arcses</p> --}}
            
            
          </div>
        </div>
        
        
        
        
        <div class="dt-sc-support-block text-center ">    
          
          <div class="dt-sc-support-icon-image">            
            <img class="lazyautosizes lazyloaded" data-src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-5_200x200.png?v=1613781114" data-aspectratio="" data-sizes="auto" alt="" sizes="78px" src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-5_200x200.png?v=1613781114">            
            <noscript>
              <img src="//cdn.shopify.com/s/files/1/0422/3162/7942/files/Benefits-5_480x480@2x.png?v=1613781114" class="dt-sc-noscript-image" />
            </noscript>
          </div>
               
          <div class="dt-sc-support-content">
              
            <h5 class="dt-sc-support-heading">Perfection of the cut</h5>
             
              
            {{-- <p class="dt-sc-support-description"> Nam laoreet et ex vehicula hendrerit. Maecenas et efficitur quam. Fusce finibus dictum leo, sit amet tellus quersum ridlus</p> --}}
            
            
          </div>
        </div>
        
        
        
        
      </div> 
    </div>
  </div>
</section>
{{--  --}}
<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background:linear-gradient(0deg, rgba(67, 49, 59, 0.3), rgba(55, 33, 46, 0.3)), url(https://images.unsplash.com/photo-1457972657980-4c9fddebec8d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);background-repeat: no-repeat;background-size: cover;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
        <div class="book p-4">
                <h1 style="color:white;" >Do you want To be apart of our Family?</h1>
                <div class="d-md-flex">
                    <h4 style="color:white;">Join us and start  <meta property="twitter:description" content="#description"><meta property="twitter:description" content="#description">Book best Tailors for your dress</h4>
                </div>
                <div>
                    <a href="./login" class="btn btn-white py-2 px-3"> Book Now!</a>
                </div>
            </div>
        </div>
    </div>
</section>
{{--  --}}

<section class="welcome-section " style="margin-top: 100px;padding:50px;margin-bottom:50px;">
  <div class="auto-container">
      <div class="row align-items-center">
          <div class="col-lg-7">
              <div class="image-block wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="">
                  <div class="row">
                      <div class="col-md-6 de">
                          <div class="" style=" "><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-1.jpg" alt=""></div>
                      </div>
                      <div class="col-md-6 de">
                          <div class="" style=""><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-2.jpg" alt=""></div>
                      </div>
                  </div>
                  {{-- <div class="experience-year"><h3>20</h3>Years of <br>Practicing </div> --}}
              </div>
          </div>
          <div class="col-lg-5">
              <div class="sec-title-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="">
                  <div class="sec-title-dec"><img src="assets//images/shape/shape-1.png" alt=""></div>
                  <div class="sub-title">Checkout our services</div>
                  <h2 class="sec-title mb-35">Introducing the Quality Tailors in Town</h2>
              </div>
              <div class="text mb-3">you need a dress maker for any occasion!? ,you dont know where to go ?? Sewing house is here for you.</div>
              <ul class="list" style="text-decoration: none;">
                  <div><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt=""> Search for Tailor in your Town.</div>
                  <div><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Make an appoinment with them .</div>
                  <div><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Get you dress done .</div>
                  <div><img src="https://html.tonatheme.com/2022/tayler/assets/images/shape/shape-2.png" alt="">Sew you style perfect.</div>
              </ul>
              <div class="author-wrapper wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="">
                  <div class="author-thumb"><img src="" alt=""></div>
                  <div class="signature"><img src="" alt=""></div>
              </div>
          </div>
      </div>  
  </div>
</section>
{{--  --}}
{{-- <section style="overflow: hidden ;" class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <!-- <a href="" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg)"> -->
                <img class="gallery img d-flex align-items-center" src="https://international.visitjordan.com/uploads/attractions/6f1162e6-5931-4b81-92d4-60ff40e6edb8.png" alt="">
                </a> 
            </div>
            <div class="col-md-3 ftco-animate">
                <!-- <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg)">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div> 
                </a> -->
                <img class="gallery img d-flex align-items-center" src="https://international.visitjordan.com/uploads/attractions/10616e17-1d50-45fe-82d2-226103ae1c98.png" alt="">
            </div>
            <div class="col-md-3 ftco-animate">
                <!-- <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg)">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a> -->
                <img class="gallery img d-flex align-items-center" src="https://international.visitjordan.com/uploads/attractions/fdc76fe9-2558-41dc-9043-887b61be5f66.png" alt="">
            </div>
            <div class="col-md-3 ftco-animate">

                <img class="gallery img d-flex align-items-center  " src="https://international.visitjordan.com/uploads/attractions/15d632d1-672d-40be-b0ba-dc93d5ff5655.png" alt="">
            </div>
        </div>
    </div>
</section>   --}}
{{--  --}}
<section class="ftco-section">
  <div class="container">
      <div class="row justify-content-center mb-5 pb-3 ">
          <div class="col-md-7 col-sm-6 heading-section ftco-animate text-center fadeInUp ftco-animated">
            <div class="sub-title">Our Tailor</div>             
            <h2 class="sec-title">Meet the Tailors</h2>              <p></p>
          </div>
      </div>
 <div class="row">
   <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
    <div class="listing-item">
      <div class="listing-image">
        <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-11.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="listing-item-content">
        <a class="px-3 mb-3 category bg-primary" href="/profile
        ">Make appoinment </a>
        <h2 class="mb-1"><a href="/profile
          ">Omar Ahmad</a></h2>
      </div>
    </div>
   </div>

   <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
    <div class="listing-item">
      <div class="listing-image">
        <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-12.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="listing-item-content">
        <a class="px-3 mb-3 category bg-primary" href="/profile
        ">Make appoinment
        </a>
        <h2 class="mb-1"><a href="/profile
          ">Ahmad Ibrahim</a></h2>
      </div>
    </div>
   </div>

    <div class="col-lg-4 col-md-6 mb-4 aos-init" data-aos="fade-up">
     <div class="listing-item">
      <div class="listing-image">
        <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-13.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="listing-item-content">
        <a class="px-3 mb-3 category bg-primary" href="/profile
        ">Make appoinment</a>
        <h2 class="mb-1"><a href="/profile
          ">Abdulla Essam</a></h2>
      </div>
    </div>
  </div>

  

</div>

</div>
</div>

</div>
</section>
{{--  --}}
<section class="ftco-section1 img " id="ftco-testimony" style="background-color: white" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
      <div class="row justify-content-center mb-3 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
              <span class="subheading">Testimony</span>
              <h2 class="mb-4" style="color:#679692">Customers Says</h2>
              <p>
                  The honest endorsement of our products and services from our loyal
                  customers.
              </p>
          </div>
      </div>
  </div>
  <div class="container-wrap">
      <div class="row d-flex no-gutters">
          <div class="col-lg align-self-sm-end ftco-animate">
              <div class="testimony">
                  <blockquote>
                      <p>
                          &ldquo;With this machine I can easily create an authentic
                          top-quality coffee at home, thanks to Jazz Beans store's
                          convenience and coffee expertise.&rdquo;
                      </p>
                  </blockquote>
                  <div class="author d-flex mt-4">
                      <div class="image mr-3 align-self-center">
                          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="" />
                      </div>
                      <div class="name align-self-center">
                          Ibrahim Ahmad
                          <span class="position">Softwere Engineer</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg align-self-sm-end">
              <div class="testimony overlay">
                  <blockquote>
                      <p>
                          &ldquo;I would like to give a huge shoutout to Jeez Beans
                          employees, I literally asked them about every little detail
                          and they just answered with super kindness and explained all I
                          needed to know, I received my order last week and I am
                          obsessed. Thanks for the experience..&rdquo;
                      </p>
                  </blockquote>
                  <div class="author d-flex mt-4">
                      <div class="image mr-3 align-self-center">
                          <img src="https://randomuser.me/api/portraits/women/40.jpg" alt="" />
                      </div>
                      <div class="name align-self-center">
                          Raghed AlQadi
                          <span class="position">Chef</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg align-self-sm-end ftco-animate">
              <div class="testimony">
                  <blockquote>
                      <p>
                          &ldquo;I don’t usually treat myself to fancy coffee, but I’m
                          homebound with a broken ankle currently, so I treated myself.
                          I mainly purchased a veriaty of coffee. The flavors are
                          incredibly smooth and strong. Would definitely purchase again.
                          &rdquo;
                      </p>
                  </blockquote>
                  <div class="author d-flex mt-4">
                      <div class="image mr-3 align-self-center">
                          <img src="https://randomuser.me/api/portraits/men/18.jpg" alt="" />
                      </div>
                      <div class="name align-self-center">
                          Osama Al Batsh
                          <span class="position">Parkour Coach</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg align-self-sm-end">
              <div class="testimony overlay">
                  <blockquote>
                      <p>
                          &ldquo;I orderd a coffee machine for my wife's birthday, and
                          we both love it. It makes delicious coffee, thanks to the
                          great variety of pods and the high quality of coffee
                          available. I drink both espressos, with a thick crema and
                          flavor similar to what one gets at the best European cafés,
                          and americanos (for the morning jug of coffee).&rdquo;
                      </p>
                  </blockquote>
                  <div class="author d-flex mt-4">
                      <div class="image mr-3 align-self-center">
                          <img src="https://randomuser.me/api/portraits/men/34.jpg" alt="" />
                      </div>
                      <div class="name align-self-center">
                          Zayed AlNabulsi
                          <span class="position">Orthopedic doctor</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg align-self-sm-end ftco-animate">
              <div class="testimony">
                  <blockquote>
                      <p>
                          &ldquo;I love homemade espresso coffee drink. The package I
                          orderd has the perfect grinding level. The espresso comes out
                          nice and smooth. &rdquo;
                      </p>
                  </blockquote>
                  <div class="author d-flex mt-4">
                      <div class="image mr-3 align-self-center">
                          <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="" />
                      </div>
                      <div class="name align-self-center">
                          Sahtha Albaw
                          <span class="position">Electrical Engineer</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection