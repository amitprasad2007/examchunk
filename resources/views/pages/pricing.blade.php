@extends('layouts.site')
@section('content')

<div class="introSection inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Pricing</h1>
                </div>
            </div>
        </div>
        <div class="divider-shape"><!-- waves divider --> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shape-waves" style="left: 0; transform: rotate3d(0,1,0,180deg);">
                <path class="shape-fill shape-fill-1" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
            </svg>
        </div>
    </div>
    <!-- <div class="introSection inner">
    	<canvas id="myCanvas1"></canvas>
        <div class="container text-center">
            <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Pricing</h1>
        </div>
    </div> -->

    <div class="clearfix"></div>

    <div class="pricingSection">
        <div class="container">
            <h2>Manage Your System</h2>
            <h5>Multiple participants, HD screen sharing, local conference line, outlook integration, Toll-free dial in.</h5>
            <div class="clearfix"></div>
            <ul class="pricinglist">
            @foreach($subscriptions as $subscription)
                <li>
                    <div class="pricingBlock">
                        <div class="pricingHeader">
                            <h4>{{$subscription->name}}</h4>
                            <h2><span>Rs.</span> {{$subscription->monthly_offer_rate}}<span>/Month</span></h2>
                        </div>
                        <div class="pricingBody">
                            {!! $subscription->details !!}
                            <a href="#" class="buynowbtn">Buy Now</a>
                        </div>
                    </div>
                </li>
            @endforeach
                <div class="section-padding"></div>

                <li>
                    <div class="pricingBlock" id="space">
                        <div class="pricingHeader">
                            <h4>ENTERPRISE</h4>
                            <h2>Custom</h2>
                        </div>
                        <div class="pricingBody">
                            <h3>Quizzes/Test creation: <strong>UNLIMITED</strong></h3>
                            <h3>No. of Tests: <strong>CUSTOM</strong></h3>
                            <h3>Reporting &amp; Tracking: <strong>YES</strong></h3>
                            <h3>Candidate Panel: <strong>YES</strong></h3>
                            <h3>Admin Panel: <strong>6</strong></h3>
                            <h3>Android Application: <strong>PERSONALIZED</strong></h3>
                            <h3>iOS Application: <strong>PERSONALIZED</strong></h3>
                            <h3>Monetize: <strong>YES</strong></h3>
                            <h3>Support: <strong>PERSONAL ACCOUNT MANAGER</strong></h3>
                            <a href="#" class="buynowbtn">Buy Now</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
@stop