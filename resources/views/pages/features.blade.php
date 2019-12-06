@extends('layouts.site')
@section('content')
<div class="introSection inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Features</h1>
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
            <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Features</h1>
        </div>
    </div> -->

    <div class="clearfix"></div>
    <div class="stepsec">
        <div class="container text-center">
            <!--<h2 data-aos="zoom-in" data-aos-easing="ease" data-aos-delay="100">KEY FEATURES</h2>
            <h5 data-aos="zoom-in" data-aos-easing="ease" data-aos-delay="500">EduSec is engineered and designed considering wide range of management functions within the university.</h5>-->
            <div class="clearfix"></div>
            <?php /* ?>
            <?php $duration = 800; ?>
            @foreach($features as $feature)
            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>{{$feature->title}}</h3>
                    <p>{!!$feature->content!!}</p>
                </div>
            </div>
            <?php $duration = $duration + 800; ?>    
            @endforeach

            <?php */ ?>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>EASY TO LEARN AND USE</h3>
                    <p>If think online assessment is going to be a tough cookie, think again! Because exam chunk is super easy to use and understand. All you need to do is sign up for a subscription and begin with the tests! However if u still find is a bit difficult we still have you covered by our demo videos and demo assistance.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>HIGHLY INTERACTIVE INTERFACE</h3>
                    <p>Exam Chunk is not only easy to use it has all your assessment needs taken care of that too just a click away.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>INCOGNITO MODE</h3>
                    <p>Exam Chunk ensures that we remain concealed so that the user feels that the test taking panel is owned by the admin i.e. we have no mention of ours whatsoever anywhere on the test taking panel taking personalization to a whole new level.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>MULTIPLE ATTEMPTS SETTING</h3>
                    <p>Admins can allow their users to appear for multiple attempts of random question sets from their question bank on the same subject appeared previously  to boost their performance.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>CUSTOMIZATION</h3>
                    <p>Exam Chunk allows the admin to attain complete customization ranging all the way from the color scheme, to the logo to the test itself.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>MULTILINGUAL</h3>
                    <p>Exam Chunk allows you to draft and create multilingual tests to suit your needs best.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>PERSONALISED A/C MANAGER</h3>
                    <p>Although Exam Chunk is super easy to use, we still provide you with a personalized a/c manager to be at your assistance as and when you need them.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>WE SUPPORT YOU</h3>
                    <p>Our top class executives and account managers are available and eager to assist you all day long!</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>OUR CUT OUT SUBSCRIPTION PLANS</h3>
                    <p>Our specifically designed subscription packages based on both number of test and numbers of users ensures to meet all needs.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>COMPATIBLE - JUST LIKE YOU</h3>
                    <p>We are just as compatible as you are! Efficiently working on android, iOS and PC interface we make sure that we are accessible on the go.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>QUESTION BANK</h3>
                    <p>Exam Chunk allows you to create a one of a kind and your very own question bank where you can have a pool of probable questions and out of those probable questions we can randomize the selection to form a question paper for you without even going through the hassle of setting the questions!</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>VARIOUS QUESTION FORMATS</h3>
                    <p>Exam Chunk allows you to choose from a range of 7 different question formats to like multiple choices, fill in the blank,  match the following, essay type, true or false, images and graphs to help you design a vibrant test paper.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>TEST TEMPLATES</h3>
                    <p>Speaking of vibrancy, we have different kinds of test templates to make your test can look the way you imagine it to. The customized test screen encourages the user to appear</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>BREAKDOWN</h3>
                    <p>The test subject chosen can be broken down upto 3 levels to create a more branched diverse test.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>ADDING QUESTIONS</h3>
                    <p>The questions of the tests can be added via unitary insertion or can be imported via an excel file.</p>
                </div>
            </div>
           
            <div class="clearfix"></div>

            <h2 class="text-center">CANDIDATE MANAGEMENT FEATURES</h2>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>ADDING USERS THE EASY WAY</h3>
                    <p>Exam Chunk allows you to add users one by one through the dashboard or by importing multiple candidates at once making your task a piece of cake.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>EXPORTING USER DATA</h3>
                    <p>At Exam Chunk the Admin is allowed to conveniently export the data of its users for e.g.- its submitted information like name, contact number etc as well as its test results whenever they want to.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>GROUPING APPLICANTS</h3>
                    <p>Exam Chunk allows admins to group users categorically in case they are to partake the same test or the same package for better control.</p>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 class="text-center">TEST SETTINGS</h2>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>VERSATILE TEST SETTINGS</h3>
                    <p>With our versatile test settings like difficulty control, movement control, tab blocks, pre defined timeline, different marks allotment, negative marking etc encourages creating a real-time examination hall environment.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>SWITCHING BETWEEN SECTIONS</h3>
                    <p>Users can also be allowed to switch between sections of the same test to allow them free movement in the test paper.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>PACKAGE CREATION</h3>
                    <p>Admins can combine two or more tests together to create a package to allow tests to flow in a more organized way and can send these packages to created user groups to keep a track on their progress.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>CUSTOMIZED TESTS</h3>
                    <p>Exam Chunk highly encourages customization as seen in the previous features, which allows you to take your tests on your terms. These custom created tests can also have a set of customized instructions to make it more authentic and personalized.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>PRE CURATED TESTS FOR CORPORATES</h3>
                    <p>Exam chunk provides a free pre designed question bank on English and aptitude test.</p>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 class="text-center">MONETIZATION</h2>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>PRICINGS AND DISCOUNTS</h3>
                    <p>Admins can price their tests and packages to make them commercial and also allow discounts and generate coupons as and when they want to.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>MULTIPLE PAYMENT GATEWAYS</h3>
                    <p>Exam Chunk integrates multiple payment methods like payTM, PayUmoney, RazorPay etc to provide you a Smooth and trustworthy payment.</p>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 class="text-center">PANELS</h2>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>ADMIN PANEL</h3>
                    <p>Exam Chunk provide you a diverse and multi-functionary admin panel which allows the admin to run all sorts of operations from one place ranging all the way from our statistics display at our dashboard to users, test etc.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>CUSTOM NOTIFICATIONS</h3>
                    <p>Send customized notifications to the users to keep them updated of their tests. Admins are allowed to choose between push notifications and alerts to notify the user.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>BULK EMAIL GENERATION</h3>
                    <p>User shall receive auto-generated mails when they join in. Admins can also send customized mails to all users or formed groups.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>SMS GATEWAY</h3>
                    <p>Admins can send bulk SMS to its users either to pre created groups or to one and all through the panel itself to keep their users notified.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>STUDENTS/URES PANEL</h3>
                    <p>Exam Chunk also provides a student/ user panel so that the user can log into and be updated about its progress.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>DOWNLOAD SECTION</h3>
                    <p>The student panel also consists of a download section for them to download the notes provided by the admin for reference or certificates if any received.</p>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 class="text-center">REPORTS AND RESULT GENERATION</h2>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>INSTANT RESULT GENERATION</h3>
                    <p>With Exam Chunk result generation is just a matter of seconds! With our instant result generation the user and the  statistical reports give a detailed transparency to the test taken by  various analysis like question- wise markings, average mark, toppers marks, subject wise marks, section wise marks helps both the user and admins to understand the scenario better.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>VARIOUS REPORTS</h3>
                    <p>The admen’s can break their reports down to candidate reports, question wise reports, status report.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>SALES REORTS</h3>
                    <p>The sales reports are to indicate the sales made to specific users with dates, user details and discounts allowed if any.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>CERTIFICATION</h3>
                    <p>Custom create certificates and decide the benchmarks for receiving it. You can also decide upon whether the user is to be mailed the certificate or has to download it from its panel</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>DOWNLOAD SECTION</h3>
                    <p>The student panel also consists of a download section for them to download the notes provided by the admin for reference or certificates if any received.</p>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 class="text-center">SECURITY</h2>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>SSL BENEFITS</h3>
                    <p>Exam Chunk ensures that your content stays only to you and does not get into the hands of someone unwillingly hence we bring you SSL benefits so that your data I encrypted when it’s out  there so you get to choose whom you want to share it with.</p>
                </div>
            </div>

            <div class="col-md-4 stepblock" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
                <div class="stepwrap contactinfo-box">
                    <span class="icon icon-Files"></span>
                    <h3>VARIOUS REPORTS</h3>
                    <p>When it come to security Exam Chunk does no compromises which is why it provides AWS security to help you function with your data safety.</p>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <div class="updatedSection">
@stop