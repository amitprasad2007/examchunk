@extends('layouts.site')
@section('content')
<div class="introSection inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">About Us</h1>
                </div>
            </div>
        </div>
        <div class="divider-shape"><!-- waves divider --> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shape-waves" style="left: 0; transform: rotate3d(0,1,0,180deg);">
                <path class="shape-fill shape-fill-2" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
            </svg>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="container welcome-section aboutContent text-justify">
        <div class="section-padding"></div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img src="{!! asset('design/site/images/blog2.jpg')!!}" data-aos="fade-right" data-aos-offset="300">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p><strong>'Exam Chunk'</strong> is a software created by Airbound Solutions Pvt. Ltd. with a network infrastructure built to last in the world of today. As the name suggests, it is an interface built to help educators and  the corporate to rethink, reinvent and rewire their learning operations and business models. Exam Chunk is a pioneer in providing business transformation services to educational institutions and corporate sector. The future of assessment belongs to those who challenge the present and Exam Chunk helps assessors embrace this challenge. From enhancing the assessees experience to achieving excellence, leaders choose us to help them work better and work differently to increase the success rate. As digital technology is expanding its horizons every day, it is essentials to adapt to the inevitable change to flourish. EXAM CHUNK makes this transition smooth for its user, so join in and be a part of the revolution.</p>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
    <div class="clearfix"></div>
    <div class="aboutblock">
        <!-- WhyChooseUs Section -->
        <div class="container welcome-section aboutContent text-justify">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p><strong>LODHA SKILL ACADEMY-</strong> Lodha Skill Academy, is an organization committed to excellence in training and imparting education. It is an advanced learning center from a multi-disciplinary point of view. The main function of LSA is to provide higher technical education at nominal rates for every group of society of rural and urban India. We provide training courses to minorities and backward classes in all regions of the Republic of India. LSA promotes entrepreneurial development and trains people for the same with ‘employability’ rather than a mere ‘degree’ being our motto.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img src="{!! asset('design/site/images/blog1.jpg')!!}" data-aos="fade-left" data-aos-offset="300">
                </div>
            </div>
        </div><!-- WhyChooseUs Section /- -->
    </div>
    <div class="clearfix"></div>
    <div class="updatedSection">
@stop