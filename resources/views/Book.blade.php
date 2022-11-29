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
        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #fff !important;
    background-color: #718d95 !important;
        }
        </style>
<section class="ftco-section">
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
    <li class="nav-item mx-5" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Book Onsite </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Tafseel Online</button>
    </li>
    <li class="nav-item" role="presentation">
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="d-flex m-5 flex-wrap align-items-center justify-content-center flex-column ">
        <div class="formbold-main-wrapper">
          <!-- Author: FormBold Team -->
          <!-- Learn More: https://formbold.com -->
          <div class="formbold-form-wrapper">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
            
              <div class="flex flex-wrap formbold--mx-3">
                <div class="w-full sm:w-half formbold-px-3">
                  <div class="formbold-mb-5 w-full">
                    <label for="date" class="formbold-form-label"> Date </label>
                    <input
                      type="date"
                      name="date"
                      id="date"
                      class="formbold-form-input"
                    />
                  </div>
                </div>
                <div class="w-full sm:w-half formbold-px-3">
                  <div class="formbold-mb-5">
                    <label for="time" class="formbold-form-label"> Time </label>
                    <input
                      type="time"
                      name="time"
                      id="time"
                      class="formbold-form-input"
                    />
                  </div>
                </div>
              </div>
        
              <div class="formbold-mb-5 formbold-pt-3">
                <label class="formbold-form-label formbold-form-label-2">
                  Address Details
                </label>
                <div class="flex flex-wrap formbold--mx-3">
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="text"
                        name="area"
                        id="area"
                        placeholder="Enter area"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="text"
                        name="city"
                        id="city"
                        placeholder="Enter city"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="text"
                        name="state"
                        id="state"
                        placeholder="Enter state"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="text"
                        name="post-code"
                        id="post-code"
                        placeholder="Post Code"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                </div>
              </div>
        
              <div>
                <button class="formbold-btn">Book Appointment</button>
              </div>
            </form>
          </div>
        </div>
        <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
          body {
            font-family: "Inter", Arial, Helvetica, sans-serif;
          }
          .formbold-mb-5 {
            margin-bottom: 20px;
          }
          .formbold-pt-3 {
            padding-top: 12px;
          }
          .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            /* padding: 48px; */
          }
        
          .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
            background: white;
          }
          .formbold-form-label {
            display: block;
            font-weight: 500;
            font-size: 16px;
            color: #07074d;
            margin-bottom: 12px;
          }
          .formbold-form-label-2 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 20px;
          }
        
          .formbold-form-input {
            width: 100%;
            padding: 12px 24px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 16px;
            color: #6b7280;
            outline: none;
            resize: none;
          }
          .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
          }
        
          .formbold-btn {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #6a64f1;
            color: white;
            width: 100%;
            cursor: pointer;
          }
          .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
          }
        
          .formbold--mx-3 {
            margin-left: -12px;
            margin-right: -12px;
          }
          .formbold-px-3 {
            padding-left: 12px;
            padding-right: 12px;
          }
          .flex {
            display: flex;
          }
          .flex-wrap {
            flex-wrap: wrap;
          }
          .w-full {
            width: 100%;
          }
          @media (min-width: 540px) {
            .sm\:w-half {
              width: 50%;
            }
          }
        </style>
      </div>
      {{-- <script type="text/javascript" src="https://form.jotform.com/jsform/223303679994468"></script> --}}
</div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

        <div class="d-flex m-5 flex-wrap justify-content-between">
        <div class="w-50">
            <img src="https://thefoldline.com/wp-content/uploads/2018/12/Body-measurement-chart-full-3.png" style="width:100%;height:100%;">
        </div>
        <div class="formbold-main-wrapper">
          <!-- Author: FormBold Team -->
          <!-- Learn More: https://formbold.com -->
          <div class="formbold-form-wrapper">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
            
              
        
              <div class="formbold-mb-5 formbold-pt-3">
                <label class="formbold-form-label formbold-form-label-2">
                  Address Details
                </label>
                <div class="flex flex-wrap formbold--mx-3">
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="area"
                        id="area"
                        placeholder="BUST(cm)"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="city"
                        id="city"
                        placeholder="WAIST(cm)"

                                                class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="state"
                        id="state"
        placeholder="HIPS(cm)"                      
        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="post-code"
                        id="post-code"
                        placeholder="Post Code"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="formbold-mb-5 formbold-pt-3">
                <label class="formbold-form-label formbold-form-label-2">
                  Address Details
                </label>
                <div class="flex flex-wrap formbold--mx-3">
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="area"
                        id="area"
                        placeholder="Enter area"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="city"
                        id="city"
                        placeholder="Enter city"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="state"
                        id="state"
                        placeholder="Enter state"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="post-code"
                        id="post-code"
                        placeholder="Post Code"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="formbold-mb-5 formbold-pt-3">
                <label class="formbold-form-label formbold-form-label-2">
                  Address Details
                </label>
                <div class="flex flex-wrap formbold--mx-3">
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="area"
                        id="area"
                        placeholder="Enter area"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="city"
                        id="city"
                        placeholder="Enter city"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="state"
                        id="state"
                        placeholder="Enter state"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="post-code"
                        id="post-code"
                        placeholder="Post Code"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="formbold-mb-5 formbold-pt-3">
                <label class="formbold-form-label formbold-form-label-2">
                  Address Details
                </label>
                <div class="flex flex-wrap formbold--mx-3">
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="area"
                        id="area"
                        placeholder="Enter area"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="city"
                        id="city"
                        placeholder="Enter city"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="state"
                        id="state"
                        placeholder="Enter state"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="number"
                        name="post-code"
                        id="post-code"
                        placeholder="Post Code"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                </div>
              </div>
        
              <div>
                <button class="formbold-btn">Book Appointment</button>
              </div>
            </form>
          </div>
        </div>
    
    </div>

    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
