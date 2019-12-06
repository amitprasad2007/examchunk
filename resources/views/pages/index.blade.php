@extends('layouts.site')
@section('content')

<div class="introSection">
    	<canvas id="myCanvas1"></canvas>
        <div class="container text-center">
            <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100"><span>Assessment and Evaluation needs?</span></h1>
            <h3 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">We've got <span>you covered!</span></h3>
            <a href="{!! URL::to('trial') !!}" class="startbtn" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1600">Take a Trial</a>
            <div class="clearfix"></div>
            <img src="{!! asset('design/site/images/dashboard.png')!!}" class="intropic"  data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1600">
        </div>
        <div class="sectionshape">
            <img src="{!! asset('design/site/images/shap.png')!!}" class="img-responsive">
        </div>
    </div>

    <div class="clearfix"></div>
  
    <div class="contentSection1">
        <div class="contentLeft">
            <div class="contentblock">
                <h2>Compatible -<span> just like you!</span></h2>
                <p>the software is compatible to PC, Android and iOS so our services are accessible to one and all.</p>
                <div class="col-md-12 col-sm-12 col-xs-12 contactinfo-box1">
					<div class="compatiblebox">
						<span class="icon icon-DesktopMonitor text-left"></span>
						<h3 class="text-left">PC Application</h3>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 contactinfo-box1">
					<div class="compatiblebox">
						<span class="icon icon-Phone text-left"></span>
						<h3 class="text-left">Android Application</h3>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 contactinfo-box1">
					<div class="compatiblebox">
						<span class="icon icon-Tools text-left"></span>
						<h3 class="text-left">IOs Application</h3>
					</div>
				</div>
            </div>
        </div>
        <div class="contentRight"  data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img src="{!! asset('design/site/images/compatible.png')!!}" class="img-responsive">
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="stepsec1">
        <div class="container">
            <h2 class="text-center" data-aos="zoom-in" data-aos-easing="ease" data-aos-delay="100">KEY <span>FEATURES</span></h2>
            <!--<h5 data-aos="zoom-in" data-aos-easing="ease" data-aos-delay="500">EduSec is engineered and designed considering wide range of management functions within the university.</h5>-->
            <?php /* ?>
            <div class="clearfix"></div>
            <?php $duration = 800; ?>
            @foreach($features as $feature)
            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="{{$duration}}">
                <div class="stepwrap1 contactinfo-box2">
                    <div class="stepContent">
                        <span class="{{$feature->icon}}"></span>
                        <h3>{{$feature->title}}</h3>
                        <p>{!!$feature->content!!}</p>
                    </div>
                </div>
            </div>
            <?php $duration = $duration + 800; ?>    
            @endforeach

            <?php */ ?>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap1 contactinfo-box2">
                    <div class="stepContent">
                        <span class="icon icon-Files"></span>
                        <h3>EASY TO LEARN AND USE</h3>
                        <p>If think online assessment is going to be a tough cookie, think again! Because exam chunk is super easy to use and understand. All you need to do is sign up for a subscription and begin with the tests! However if u still find is a bit difficult we still have you covered by our demo videos and demo assistance.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap1 contactinfo-box2">
                    <div class="stepContent">
                        <span class="icon icon-Files"></span>
                        <h3>HIGHLY INTERACTIVE INTERFACE</h3>
                        <p>Exam Chunk is not only easy to use it has all your assessment needs taken care of that too just a click away.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap1 contactinfo-box2">
                    <div class="stepContent">
                        <span class="icon icon-Files"></span>
                        <h3>INCOGNITO MODE</h3>
                        <p>Exam Chunk ensures that we remain concealed so that the user feels that the test taking panel is owned by the admin i.e. we have no mention of ours whatsoever anywhere on the test taking panel taking personalization to a whole new level.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap1 contactinfo-box2">
                    <div class="stepContent">
                        <span class="icon icon-Files"></span>
                        <h3>MULTIPLE ATTEMPTS SETTING</h3>
                        <p>Admins can allow their users to appear for multiple attempts of random question sets from their question bank on the same subject appeared previously  to boost their performance.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap1 contactinfo-box2">
                    <div class="stepContent">
                        <span class="icon icon-Files"></span>
                        <h3>CUSTOMIZATION</h3>
                        <p>Exam Chunk allows the admin to attain complete customization ranging all the way from the color scheme, to the logo to the test itself.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap1 contactinfo-box2">
                    <div class="stepContent">
                        <span class="icon icon-Files"></span>
                        <h3>MULTILINGUAL</h3>
                        <p>Exam Chunk allows you to draft and create multilingual tests to suit your needs best.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="4800">
                <div class="contactinfo-box stepwrap">
                    <span class="icon icon-Notes"></span>
                    <h3>Extensive Database</h3>
                    <p>Global expertise delivered at the click of a mouse.</p>
                </div>
            </div>
            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="4800">
                <div class="contactinfo-box stepwrap">
                    <span class="icon icon-Settings"></span>
                    <h3>Fully Customizable</h3>
                    <p>Mastering the art of quality and consistency, to build and deliver better services.</p>
                </div>
            </div>
            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="4800">
                <div class="contactinfo-box stepwrap">
                    <span class="icon icon-Menu"></span>
                    <h3>And Much More!</h3>
                </div>
            </div> -->
            <div class="clearfix"></div>
            <p class="text-center"><a href="{!! URL::to('features') !!}" class="featuredbtn">View All Features</a></p>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- <div class="pricingSection">
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
            </ul>
            <div class="clearfix"></div>
            <p class="text-center"><a href="{!! URL::to('pricing') !!}" class="pricingbtn">View All Pricing List</a></p>
            <div class="clearfix"></div>
        </div>
    </div> -->
    
    <div class="clearfix"></div>
    <div class="contactSection">
        <div class="container">
            <h2>How can <span>we help?</span></h2>
            <h5>Got a question? We’d love to hear from you.<br/>Send us a message and we’ll respond as soon as possible.</h5>
            <div class="row">
                <div class="col-md-4">
                    <img src="{!! asset('design/site/images/customer-service.svg')!!}">
                    <h3>Give us a Call</h3>
                    <p>We are just a cal away at-<br/>{{$settings[0]->phone}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{!! asset('design/site/images/address.svg')!!}">
                    <h3>Vist Our Office</h3>
                    <p>{{$settings[0]->address}}<br/><a href="https://www.google.com/maps/place/56e,+Hemanta+Basu+Sarani,+Lal+Dighi,+B.B.D.+Bagh,+Kolkata,+West+Bengal+700001/@22.5685788,88.3470501,17z/data=!3m1!4b1!4m5!3m4!1s0x3a0277a6be9ca239:0x7c9de80445c324f3!8m2!3d22.5685788!4d88.3492388" title="Get Direction" target="_blank">Get Direction</a></p>
                </div>
                <div class="col-md-4">
                    <img src="{!! asset('design/site/images/paper-plane.svg')!!}">
                    <h3>Drop us a Line</h3>
                    <p>Dropping us a mail at-<br/><a href="mailto:{{$settings[0]->email}}" title="{{$settings[0]->email}}">{{$settings[0]->email}}</a></p>
                </div>
            </div>
        </div>
    </div>

@stop