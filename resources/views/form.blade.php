@extends('layout.master')
@section('content')
<style>
    .ftco-navbar-light .navbar-brand{
      color: #343a40;
    }
    #ftco-navbar :hover{
color:aliceblue;
  }
label{
  font-weight: 600;
}
    #ftco-navbar :hover{
    /* color:#679692; */
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
            color:rgb(246, 241, 241);
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
        .card
        {
            /* border-color:rgb(88 83 83); */
        }
        .form-control{
           border: 1px solid #c5bbbb !important
        }
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
        </style>
<section class="h-100" style="background-image:url">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100 w-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <hr>
            <div class="col-xl-12">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Tailors registration:</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1m">First name</label>

                      <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1n">Last name</label>

                      <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Email ID</label>

                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example90">Password</label>

                  <input type="password" id="form3Example90" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example90">Re-Password</label>

                  <input type="password" id="form3Example90" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example90">Phone</label>

                  <input type="text" id="form3Example90" class="form-control form-control-lg" />
                </div>
              

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  

                </div>

                <div class="row">
                  <div class="col-md-4 mb-4 ">
                    <label class="form-label  " for="form3Example9">Date of birth</label>

                    <input type="date" id="form3Example9" class="form-control form-control-lg" />
                   

                  </div>
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                    <label class="form-label mx-4" for="form3Example9">City :</label>

                    <select class="select">
                      <option value="1">City</option>
                      <option value="2">Amman</option>
                      <option value="3">Zarqa</option>
                      <option value="4">Mafraq</option>
                      <option value="5">Aqaba</option>
                      <option value="6">Maan</option>
                      <option value="7">Ajloun</option>
                      <option value="8">Tafeleh</option>
                      <option value="9">Karak</option>
                      <option value="10">Salt</option>
                      <option value="11">Irbid</option>
                      <option value="12">Madaba</option>
                    </select>

                  </div>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example8">Address</label>

                  <input type="text" id="form3Example8" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">Image</label>

                  <input type="file" id="form3Example9" class="form-control form-control-lg" />
                </div>

              
                <div class="d-flex justify-content-end pt-3">
                  {{-- <button type="button" class="btn btn-light btn-lg">Reset all</button> --}}
                  <button type="button" class="btn btn btn-lg ms-2" style="background-color: #b9a494">Register Now</button>
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