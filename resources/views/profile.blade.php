@extends('layout.master')
@section('content')
<style>
.ftco-navbar-light .navbar-brand{
    color: #343a40;
  }
  #ftco-navbar :hover{
color:aliceblue;
}

  #ftco-navbar :hover{
  /* color:#679692; */
    }
    .text-muted {
        font-weight: 500 !important;
    }
  .navbar-brand small {
    color: #343a40;
  }
      .ftco-navbar-light{
          background: #679692eb !important;
         position:relative;
      }
      .ftco-navbar-light .navbar-nav > .nav-item.cart > a .icon{
      color:#4e4747;
    }
      .ftco-navbar-light .navbar-nav > .nav-item > .nav-link{
          color:rgb(246, 240, 240);
      }
      span{
          color:#343a40;
      }
      body{
        color:#101010;
      }
      h3,h2,h5{
        color:#000;
      }
      .card
      {
          /* border-color:rgb(88 83 83); */
      }
      .form-control{
         border: 1px solid #c5bbbb !important
      }
      .btn-primary{
        background-color:#b9a494 !important; 
        border: 1px solid #b9a494 !important;
        color:rgb(55, 53, 52) !important;
      }
      .btn-primary:hover{
        background-color: #c5bbbb1d !important;
      }
     button{
        border-width: 0 !important;
      }
      .rating {
display: flex;
margin-top: -10px;
flex-direction: row-reverse;
margin-left: -4px;
float: left
}
.rating>input {
display: none
}
.rating>label {
position: relative;
width: 19px;
font-size: 25px;
color: #ff0000;
cursor: pointer
}
.rating>label::before {
content: "\2605";
position: absolute;
opacity: 0
}
.rating>label:hover:before,
.rating>label:hover~label:before {
opacity: 1 !important
}
.rating>input:checked~label:before {
opacity: 1
}
.rating:hover>input:checked~label:before {
opacity: 0.4
}
      </style>
<div class="container py-5"> <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4 text-dark" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px);">
                <div class="card-body text-center">
                    <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-11.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:148px">
                    <h5 class="my-3 text-dark ">
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>   </h5>
                    <p class="text-muted mb-1">City</p>
                    <p class="text-muted mb-4">Address</p>
                    <div class="d-flex justify-content-center mb-2">
                        
                        <a type="button" href="/book1" class="btn btn-primary btn-outline-primary mx-1" >Book Now</a>
                        {{-- <a href="register/includes/logout.inc.php?id=2"><button type="button" class="btn btn-danger btn-outline-danger mx-1" onclick="">Logout</button></a> --}}

                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-8">
            <div class="card mb-4 text" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h5 class="mb-0 bw">Full Name:</h5>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">Omar Ahmed </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h5 class="mb-0 bw">Email:</h5>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">eman@gmail.com</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h5 class="mb-0 bw">Bio:</h5>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">15 expeince with the noddle and the bla bla bla</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h5 class="mb-0 bw">Date of birth:</h5>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">1998-10-03</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 bw">
                            <h5 class="mb-0">phone number:</h5>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">0775582555 </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 bw ">
                            <h5 class="mb-0">Open Hours:</h5>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"> Mon-Fri: 9 AM - 9 PM</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4 mb-md-0" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(2px); min-height:auto;">
            <div class="card-body ">
                <h3>My Works</h3>
                <hr>
                <div class="table-responsive d-flex flex-wrap">
                    <div class="card col-md-4">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea"/>
                        <div class="card-body ">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card col-md-4">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea"/>
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      <div class="card col-md-4">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea"/>
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="card m-5">
    <div class="row">
    <div class="col-2"> <img src="https://html.tonatheme.com/2022/tayler/assets/images/resource/image-13.jpg" width="70" class="rounded-circle mt-2"> </div>
    <div class="col-10">
    <div class="comment-box ml-2">
    <h4>Add a comment</h4>
    <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> </div>
    <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?" rows="4"></textarea> </div>
    <div class="comment-btns mt-2">
    <div class="row">
    <div class="col-1">
    <div class="pull-right"> <button class="btn btn-primary send btn-sm">Send <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




    {{-- <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content" style="background: rgba(255, 255, 255, 0.159); backdrop-filter: blur(5px);">
                <div class="modal-header">
                    <h3 class="modal-title text-black text " id="exampleModalLabel">Purchase Reciept</h3>
                    <hr>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="card-body p-5">


                                                            <div class="row">
                                <div class="col-6 mb-1">
                                    <p class="small text-muted mb-1">Date</p>
                                    <p>2022-09-30 00:00:00</p>
                                </div>
                                <div class="col-3 mb-1">
                                    <p class="small text-muted mb-1">Order No.</p>
                                    <p>1</p>
                                </div>
                                <div class="col-3 mb-1">
                                    <p class="small text-muted mb-1">invoice No.</p>
                                    <p>1</p>
                                </div>
                            </div>

                        
                        <hr color="grey">
                        <div class="py-2" style="border-radius:5px;">
                            <div class="row">
                                <div class="col-md-4 col-lg-6">

                                    <p style="color:#f37a27 ;">Product name</p>
                                </div>
                                <div class="col-md-4 col-lg-3">

                                    <p style="color:#f37a27 ;">Quantity</p>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <p class="text-center" style="color:#f37a27 ;">Price</p>
                                </div>
                            </div>
                        </div>
                        
                            <div class="py-2" style="border-radius:5px;">
                                <div class="row">
                                    <div class="col-md-4 col-lg-6">

                                        <p style="color:#f37a27 ;">Chemex</p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">

                                        <p class="text-center" style="color:#f37a27 ;">2</p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p class="text-center" style="color:#f37a27 ;">31 JOD</p>
                                    </div>
                                </div>
                            </div>

                        
                        <div class="row mt-2">
                            <div class="col-md-8 col-lg-9">
                                <p class="mb-0" style="color:#f37a27 ;">Shipping fees</p>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <p class="mb-0 text-center" style="color:#f37a27 ;">3 JOD</p>
                            </div>
                        </div>
                    </div>

                    <hr color="grey">

                    <div class="row my-4">

                        <div class="col-md-8 col-lg-9">
                            <p class="lead fw-bold mb-0" style="color: #f37a27;">Total Price:</p>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <p class="lead fw-bold mb-0" style="color: #f37a27;">200 JOD</p>
                        </div>
                    </div>

                    <hr color="grey">

                    <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="horizontal-timeline" style="color:#f37a27;">

                                <ul class="list-inline items d-flex justify-content-between">
                                    <li class="list-inline-item items-list">
                                        <p class="py-1 px-2 rounded text" style="background-color: green;">Ordered</p>
                                    </li>
                                    <li class="list-inline-item items-list">
                                        <p class="py-1 px-2 rounded text" style="background-color: #f37a27;">Shipped</p>
                                    </li>
                                    <li class="list-inline-item items-list">
                                        <p class="py-1 px-2 rounded text" style="background-color: #f37a27;">On the way
                                        </p>
                                    </li>
                                    <li class="list-inline-item items-list">
                                        <p class="py-1 px-2 rounded text" style="background-color: #f37a27;">Delivered
                                        </p>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>

                    <p class="mt-4 pt-2">Want any help? <a href="contact.php" style="color: #f37a27;">Please contact
                            us</a></p>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection