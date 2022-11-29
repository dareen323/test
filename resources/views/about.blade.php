@extends('layout.master')
@section('content')
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(https://images.unsplash.com/photo-1586216583179-20b23ef9dd5f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1236&q=80">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(https://www.betterteam.com/images/sewing-machine-operator-job-description-6000x4000-20201117.jpeg?crop=4:3,smart&width=1200&dpr=2)"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Our Story</h2>
            </div>
            <div>
                <p style="color:white">In COVID-19 dark days, the importance of online stores has
                    increased and the need to serve customers to ensure their safety
                    and our workers' safety has emerged. Our team consists of coffee
                    experts, baristas, and people with a passion for coffee. We import
                    the finest coffee from all over the world, contract with the best
                    coffee machines and equipment brands, and choose the most useful
                    and practical accessories for you.</p>
            </div>
        </div>
    </div>
</section>


@endsection