@extends('layouts.site')
@section('content')

<section class="loginSection">
        <div class="container">
            <div class="row">
                <div class="loginBox">
                    <div class="loginBlock">
                        <h3>TRIALS AT <span>EXAMCHUNK</span></h3>
                        <p>We believe in letting our product speak for itself which is why we provide free trials for you to test if our product actually stand on the claims it makes.</p>
                    </div>
                    <div class="loginContainer" style="height: 600px;">
                        <h3 style="margin-top: -30px;">Continue to <span>Dashboard</span></h3>
                        <p>Enter your details to continue</p>
                        @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                            <a title="close" aria-label="close" data-dismiss="alert" class="close" href="#">×</a>
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        {!! Form::open(array('route'=>'site.pages.trial_submit','id'=>'register-form','class'=>'trial-form')) !!}
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mobile No.</label>
                            <input type="tel" name="mobile" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" name="company_name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Website Url</label>
                            <input type="url" name="website_url" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <input type="submit" class="btn btn-block btn-demo" value="Submit">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop