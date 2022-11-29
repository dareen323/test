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

    <div class="slider-item" style="background-image: url(https://html.tonatheme.com/2022/tayler/assets/images/background/bg-7.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Blog</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Blog</span></p>
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
                  <div class="news-block-two">
                      <div class="inner-box">
                          <div class="image"><a href="/blog"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-4.jpg" alt=""></a></div>
                          <div class="lower-content">
                              <ul class="post-mate">
                                  <li><i class="far fa-calendar-alt"></i> 20 Sep, 2021 </li>
                                  <li><i class="far fa-user"></i> Admin</li>
                                  <li><i class="far fa-comments"></i> 2 Comments</li>
                              </ul>                                
                              <h4><a href="/blog">How to Take Care of Leather Jackets</a></h4>
                              <div class="text">There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida.</div>
                              <div class="read-more">
                                  <a href="/blog">Read More</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="news-block-two">
                      <div class="inner-box">
                          <div class="image"><a href="/blog"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-6.jpg" alt=""></a></div>
                          <ul class="post-mate">
                              <li><i class="far fa-calendar-alt"></i> 20 Sep, 2021 </li>
                              <li><i class="far fa-user"></i> Admin</li>
                              <li><i class="far fa-comments"></i> 2 Comments</li>
                          </ul>                                
                          <h4><a href="/blog">How to Take Care of Leather Jackets</a></h4>
                          <div class="text">There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida.</div>
                          <div class="read-more">
                              <a href="/blog">Read More</a>
                          </div>
                      </div>
                  </div>
                  <div class="news-block-two">
                      <div class="inner-box">
                          <div class="image"><a href="/blog"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-5.jpg" alt=""></a></div>
                          <ul class="post-mate">
                              <li><i class="far fa-calendar-alt"></i> 20 Sep, 2021 </li>
                              <li><i class="far fa-user"></i> Admin</li>
                              <li><i class="far fa-comments"></i> 2 Comments</li>
                          </ul>                                
                          <h4><a href="/blog">How to Take Care of Leather Jackets</a></h4>
                          <div class="text">There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida.</div>
                          <div class="read-more">
                              <a href="/blog">Read More</a>
                          </div>
                      </div>
                  </div>
                  <div class="news-block-two">
                      <div class="inner-box">
                          <div class="image"><a href="/blog"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-7.jpg" alt=""></a></div>
                          <ul class="post-mate">
                              <li><i class="far fa-calendar-alt"></i> 20 Sep, 2021 </li>
                              <li><i class="far fa-user"></i> Admin</li>
                              <li><i class="far fa-comments"></i> 2 Comments</li>
                          </ul>                                
                          <h4><a href="/blog">How to Take Care of Leather Jackets</a></h4>
                          <div class="text">There are not many of passages of lorem ipsum available alteration in some form. Donec scelerisque dolor id nunc dictum, interdum gravida.</div>
                          <div class="read-more">
                              <a href="/blog">Read More</a>
                          </div>
                      </div>
                  </div>
                  <div class="post-pagination">
                      <ul class="clearfix">
                          <li><a href="#"><span class="fas fa-angle-left"></span></a></li>
                          <li><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#"><span class="fas fa-angle-right"></span></a></li>
                      </ul>
                  </div>
              </div> 
              <div class="col-lg-4">
                  <aside class="sidebar blog-sidebar">
                  
                      <!-- Search -->
                      <div class="widget search-box">
                          <form method="post" action="contact.html">
                              <div class="form-group">
                                  <input type="search" name="search-field" value="" placeholder="Search" required="">
                                  <button type="submit"><span class="icon fa fa-search"></span></button>
                              </div>
                          </form>
                      </div> 
                      
                      <!-- Popular Posts -->
                      <div class="widget news-widget-two">
                          <h4 class="widget_title">Recent Posts</h4>

                          <article class="post">
                              <figure class="post-thumb"><a href="/blog"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-8.jpg" alt=""></a></figure>
                              <div class="comment"><i class="far fa-comments"></i> 2 Comments</div>
                              <div class="text"><a href="/blog">Integer tristique odio
                                  vitae lorem gra
                              </a></div>
                          </article>

                          <article class="post">
                              <figure class="post-thumb"><a href="/blog"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-8.jpg" alt=""></a></figure>
                              <div class="comment"><i class="far fa-comments"></i> 2 Comments</div>
                              <div class="text"><a href="/blog">Integer tristique odio
                                  vitae lorem gra
                              </a></div>
                          </article>
                          
                          <article class="post">
                              <figure class="post-thumb"><a href="/blog"><img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/news-10.jpg" alt=""></a></figure>
                              <div class="comment"><i class="far fa-comments"></i> 2 Comments</div>
                              <div class="text"><a href="/blog">Integer tristique odio
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
  </section>
@endsection