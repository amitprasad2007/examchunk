@extends('layouts.site')
@section('content')

<div class="introSection inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Contact</h1>
                </div>
            </div>
        </div>
        <div class="divider-shape"><!-- waves divider --> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shape-waves" style="left: 0; transform: rotate3d(0,1,0,180deg);">
                <path class="shape-fill shape-fill-2" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
            </svg>
        </div>
    </div>
    <!-- <div class="introSection inner">
    	<canvas id="myCanvas1"></canvas>
        <div class="container text-center">
            <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Contact</h1>
        </div>
    </div> -->

    <div class="clearfix"></div>

    <div class="container">
            <div class="section-padding"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="map">
                        <!-- <div id="map-canvas-contact" class="map-canvas"  data-lat="22.698440" data-lng="88.466920" data-string="56E Hemanta Basu Sarani Kolkata-700001" data-zoom="10"></div> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.281252280534!2d88.34705661440515!3d22.568581838807038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277a6be84a81b%3A0x13247b2f5ecb12a8!2sStephen+House%2C+6th+Floor%2C+Suite+no.+101%2C+56%2C+Hemanta+Basu+Sarani%2C+Lal+Dighi%2C+BBD+Bagh%2C+Kolkata%2C+West+Bengal+700001!5e0!3m2!1sen!2sin!4v1545116265278" width="100%" height="580" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="getintouch">
                        <h3>Get in touch </h3>
                        <p>We believe interaction is one way which will help us grow more and make changes for the better so let us know what you think of us.</p>
                         @if(Session::has('message'))
			            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
			                <a title="close" aria-label="close" data-dismiss="alert" class="close" href="#">×</a>
			                {{ Session::get('message') }}
			            </div>
			            @endif
						{!! Form::open(array('route'=>'site.pages.contact_submit','id'=>'register-form','class'=>'contactus-form')) !!}
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Name" id="input_name" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="email" required="required" placeholder="Email" id="input_email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="tel" required="required" placeholder="Contact No." id="input_mobile" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" required="" placeholder="Company Name" id="input_company" class="form-control" name="company_name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea placeholder="Tell us what you have in mind" id="textarea_message" class="form-control" name="message" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="submit" name="post" title="Send" id="btn_submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="section-padding"></div>
        </div>

    <div class="clearfix"></div>
    <div class="contactSection contact">
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

    <div class="clearfix"></div>

@stop