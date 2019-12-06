@extends('layouts.site')
@section('content')

<?php
$mobile = base64_decode($_GET['code']);
//die($mobile);

?>
<section class="loginSection">
        <div class="container">
            <div class="row">
                <div class="loginBox">
                    <div class="loginBlock">
                        <h3>Schedule <span>a Demo</span></h3>
                        <p>Add your professional information.</p>

                        <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

                        <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="loginContainer">
                        <h3>Verify Your <span>Contact Details</span></h3>
                        <p>Enter your verification code</p>
                        @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                            <a title="close" aria-label="close" data-dismiss="alert" class="close" href="#">×</a>
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        {!! Form::open(array('route'=>'site.pages.verify_mobile','id'=>'register-form','class'=>'trial-form')) !!}
                        <div class="form-group">
                            <label class="control-label">OTP</label>
                            <input type="hidden" name="mobile" value="<?=$mobile?>">
                            <input type="text" name="otp" class="form-control" required="required">
                        </div>
                        {!! Form::close() !!}
                        <input type="submit" class="btn btn-block btn-demo" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop