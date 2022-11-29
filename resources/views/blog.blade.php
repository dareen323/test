@extends('layout.master')
@section('content')
<link rel="stylesheet" href="css/blog.css">
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
        color:rgb(248, 245, 245);
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
    
    </style>
{{-- <section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url('https://international.visitjordan.com/uploads/attractions/06303074-fd97-4387-b5f3-dce9f05e3023.jpg">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Blog Details</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Single</span></p>
          </div>

        </div>
      </div>
    </div>
  </section> --}}

  <section class="ftco-section">
    <div class="sidebar-page-container">
      <div class="auto-container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="news-block-three blog-single-post">
                      <div class="inner-box">
                          <div class="image">
                              <a href="blog-details.html"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-4.jpg" alt=""></a>
                          </div>
                          <div class="content">
                              <ul class="post-meta">
                                  <li><i class="far fa-calendar-alt"></i> 20 Sep, 2021 </li>
                                  <li><i class="far fa-user"></i> Admin</li>
                                  <li><i class="far fa-comments"></i> 2 Comments</li>
                              </ul>
                              <h4>Safe Driving is Only Achieved by Time Spent</h4>
                              <div class="text">There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida. Te veritus tractatos delicatissimi qui, justo diceret mentitum ut sit. Qui sed reque dicam, qui veri nullam vituperatoribus in. Tibique maiestatis sum quod sum ut alienum nec et, summo possim persequeris vix mea. Adhuc quodsi qui, sit no tale essent electram. Mei sum prodesset in pro, quo scripta feugait vidisse. Lorem ipsum dolor sit amet, eu duo ferri labor. Mea ex modo reque senserit, et sed hinc dolor, scaevola sum salutandi expetendis vix ne. Eros dicat his sum mel quod mundi consequat sum. There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida. Te veritus tractatos delicatissimi qui.                                
                              <br><br>
                              Qui sed reque dicam, qui veri nullam vituperatoribus in. Tibique maiestatis sum quod sum ut alienum nec et, summo possim persequeris vix mea. Tibique maiestatis sum quod sum ut alienum nec et, summo possim persequeris vix mea. Adhuc quodsi qui, sit no tale essent electram. Mei sum prodesset in pro, quo scripta feugait vidisse. Lorem ipsum dolor sit amet, eu duo ferri labor.</div>
                          </div>
                          <div class="post-tag">
                              <div>
                                  <span class="tag-title">Tags</span>
                                  <ul class="tag">
                                      <li><a href="#">Suits</a></li>
                                      <li><a href="#">Taylering</a></li>
                                  </ul>
                              </div>
                              <ul class="social-icon">
                                  <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                  <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                  <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                              </ul>
                          </div>
                          <div class="author-box">
                              <div class="image"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/thumb-1.jpg" alt=""></div>
                              <h4>Christive Eve</h4>
                              <div class="text">Lorem ipsum is simply free text by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed veritatis et quasi architecto.</div>
                          </div>
                          <div class="comments-area">
                              <div class="group-title"><h3>2 Comments</h3></div>
                              <!--Comment Box-->
                              <div class="comment-box">
                                  <div class="comment">
                                      <div class="author-thumb"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/thumb-2.jpg" alt=""></div>
                                      <div class="comment-inner">
                                          <h5>Kevin Martin</h5>
                                          <div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae </div>
                                          <a class="reply-comment-btn" href="#"> Reply</a>
                                      </div>
                                  </div>
                              </div>        
                              <!--Comment Box-->
                              <div class="comment-box">
                                  <div class="comment">
                                      <div class="author-thumb"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/thumb-3.jpg" alt=""></div>
                                      <div class="comment-inner">
                                          <h5>Jessica Brown</h5>
                                          <div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae </div>
                                          <a class="reply-comment-btn" href="#"> Reply</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="comment-form">  
                              <div class="group-title"><h3>Leave a Comments</h3></div>
                              <form method="post">
                                  <div class="row row-10">
                                      {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="text" name="username" placeholder="Name*" required="">
                                      </div> --}}
                                      {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="email" name="email" placeholder="Email*" required="">
                                      </div> --}}
                                      {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="text" name="phone" placeholder="Phone*" required="">
                                      </div> --}}
                                      {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="text" name="subject" placeholder="Subject*" required="">
                                      </div> --}}
                                      <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                          <textarea name="message" placeholder="Write Message"></textarea>
                                      </div>
                                      <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                          <button class="theme-btn btn-style-one dark" type="submit" name="submit-form"><span class="btn-title">Submit Comment</span></button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div> 
              <div class="col-lg-4">
                  <aside class="sidebar blog-sidebar">
                  
                      <!-- Search -->
                      <div class="widget search-box">
                          <form method="post" action="contact.html">
                              <div class="form-group">
                                  <input type="search" name="search-field" value="" placeholder="Search" required="">
                                  <button type="submit"><span class="icon fas fa-search"></span></button>
                              </div>
                          </form>
                      </div> 
                      
                      <!-- Popular Posts -->
                      <div class="widget news-widget-two">
                          <h4 class="widget_title">Recent Posts</h4>

                          <article class="post">
                              <figure class="post-thumb"><a href="blog-details.html"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-8.jpg" alt=""></a></figure>
                              <div class="comment"><i class="far fa-comments"></i> 2 Comments</div>
                              <div class="text"><a href="blog-details.html">Integer tristique odio
                                  vitae lorem gra
                              </a></div>
                          </article>

                          <article class="post">
                              <figure class="post-thumb"><a href="blog-details.html"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-9.jpg" alt=""></a></figure>
                              <div class="comment"><i class="far fa-comments"></i> 2 Comments</div>
                              <div class="text"><a href="blog-details.html">Integer tristique odio
                                  vitae lorem gra
                              </a></div>
                          </article>
                          
                          <article class="post">
                              <figure class="post-thumb"><a href="blog-details.html"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-10.jpg" alt=""></a></figure>
                              <div class="comment"><i class="far fa-comments"></i> 2 Comments</div>
                              <div class="text"><a href="blog-details.html">Integer tristique odio
                                  vitae lorem gra
                              </a></div>
                          </article>

                      </div>

                      <!--Blog Category Widget-->
                      <div class="widget category-widget">
                          <h4 class="widget_title">Categories</h4>
                          <ul class="cat-list">
                              <li><a href="#">Suits</a></li>
                              <li><a href="#">Jackets</a></li>
                              <li><a href="#">Taylering</a></li>
                              <li><a href="#">Custom Dress</a></li>
                              <li><a href="#">Clothing</a></li>
                          </ul>
                      </div>
                      
                      <!-- Popular Tags -->
                      <div class="widget tag-widget">
                          <h4 class="widget_title">Popular Tags</h4>
                          <div class="tag-outer">
                              <a href="#">Clothing</a>
                              <a href="#">Dresses</a>
                              <a href="#">Suits</a>
                              <a href="#">taylering</a>
                              <a href="#">custom dress</a>
                          </div>
                      </div>
                 </aside>
              </div>      
          </div>
      </div>
  </div>
  </section> <!-- .section -->
@endsection