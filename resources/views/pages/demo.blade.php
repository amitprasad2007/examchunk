@extends('layouts.site')
@section('content')

<div class="introSection inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Demo Request Form</h1>
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
            <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Free Demo</h1>
        </div>
    </div> -->

    <div class="clearfix"></div>
    <div class="container-fluid no-padding contactus-section" id="space2">
        <div class="container">
            <div class="section-padding"></div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="getintouch">
                        <h3>Allow us to assist your through your assessment process. Request for a demo for free!</h3>
                        @if(Session::has('message'))
			            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
			                <a title="close" aria-label="close" data-dismiss="alert" class="close" href="#">×</a>
			                {{ Session::get('message') }}
			            </div>
			            @endif
                            {!! Form::open(array('route'=>'site.pages.free_demo_enquiry_submit','id'=>'register-form','class'=>'contactus-form')) !!}
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" required="" placeholder="Name" id="input_name" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="email" required="" placeholder="Email" id="input_email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" required="" placeholder="Organization" id="input_name" class="form-control" name="organization">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="tel" required="" placeholder="Contact" id="input_email" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" required="" placeholder="Job Title" id="input_name" class="form-control" name="job_title">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" required="" placeholder="No of tests to be taken in a month" id="input_email" class="form-control" name="no_of_tests">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="url" required="" placeholder="Website Url" id="input_email" class="form-control" name="website_url">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea placeholder="Specific Requests" id="textarea_message" class="form-control" name="message" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="submit" name="post" title="Send" id="btn_submit" value="Submit">
                                    </div>
                                </div>
                                <div class="alert-msg" id="alert-msg"></div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="section-padding"></div>
        </div>
    </div>

    <div class="clearfix"></div>

@stop