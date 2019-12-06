@extends('layouts.site')
@section('content')
<div class="introSection inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">FAQ's</h1>
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
            <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">FAQ's</h1>
        </div>
    </div> -->

    <div class="clearfix"></div>
  <div class="container welcome-section aboutContent text-justify">
     <div class="section-padding"></div>
    <div role="tabpanel">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-stacked" role="tablist">
                <li role="presentation" class="active"><a class="button2" href="#description" aria-controls="description" role="tab" data-toggle="tab"><h4>GENERAL WORKINGS</h4></a></li>
                <li role="presentation"><a class="button2" href="#students" aria-controls="students" role="tab" data-toggle="tab"><h4>ACCOUNT MANAGEMENT BASED</h4></a></li>
                <li role="presentation"><a class="button2" href="#news" aria-controls="news" role="tab" data-toggle="tab"><h4>PAYMENT</h4></a></li>
                <li role="presentation"><a class="button2" href="#events" aria-controls="events" role="tab" data-toggle="tab"><h4>NOTIFICATIONS</h4></a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="description">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php $srno = 1; ?>
                    @foreach($faqs1 as $faq)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?=$srno?>">
                          <h4 class="panel-title">                            
                              {{$faq->title}}                       
                          </h4>
                        </div>                        
                          <div class="panel-body">
                            {!!$faq->content!!}
                          </div>                        
                      </div>  
                    <?php $srno = $srno + 1; ?>    
                    @endforeach
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="students">
                  <div class="ed_inner_dashboard_info">
                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                      <?php $srno = 1; ?>
                      @foreach($faqs2 as $faq)
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="heading<?=$srno?>">
                            <h4 class="panel-title">                            
                                {{$faq->title}}                       
                            </h4>
                          </div>                        
                            <div class="panel-body">
                              {!!$faq->content!!}
                            </div>                        
                        </div>  
                      <?php $srno = $srno + 1; ?>    
                      @endforeach
                    </div>
                  </div>
                </div>


                <div role="tabpanel" class="tab-pane" id="news">
                  <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                    <?php $srno = 1; ?>
                    @foreach($faqs3 as $faq)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?=$srno?>">
                          <h4 class="panel-title">                            
                              {{$faq->title}}                       
                          </h4>
                        </div>                        
                          <div class="panel-body">
                            {!!$faq->content!!}
                          </div>                        
                      </div>  
                    <?php $srno = $srno + 1; ?>    
                    @endforeach
                  </div>
                </div>
              
                <div role="tabpanel" class="tab-pane" id="events">
                  <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                    <?php $srno = 1; ?>
                    @foreach($faqs4 as $faq)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?=$srno?>">
                          <h4 class="panel-title">                            
                              {{$faq->title}}                       
                          </h4>
                        </div>                        
                          <div class="panel-body">
                            {!!$faq->content!!}
                          </div>                        
                      </div>  
                    <?php $srno = $srno + 1; ?>    
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
    <!--<div class="container welcome-section aboutContent text-justify">
        <div class="section-padding"></div>

        <h3>GENERAL WORKINGS</h3>
        
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
              What is EXAM CHUNK?
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
          <div class="panel-body">
            <p>EXAM CHUNK is a custom curated, internet based assessment platform convenient for both educational and corporate sector which allows you to CREATE, ASSIGN and EVALUATE tests smoothly and without a hassle.  </p>
            <p>EXAM CHUNK also allows you to personalize your test catering to all your needs exactly the way you imagine which is also easily accessible and allows you to create a real-time environment. </p>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How will it work for me?
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
          <div class="panel-body">
            <p>In this fast pacing world if you are still stuck with the tedious manual assessment process, it’s time for an intervention! EXAM CHUNK is the way of the future, try it for making your assessment easy, hassle-free and cheat free, so that you enjoy taking your assessment your way.</p>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              How do I avail a free trial?
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
          <div class="panel-body">
            <p>Give EXAM CHUNK a try for free before paying up for a plan. Visit (<a href="http://www.examchunk.com">www.examchunk.com</a>) to sign up for free!</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              How do I avail a free demo?
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
          <div class="panel-body">
            <p>Give EXAM CHUNK a try for free before paying up for a plan. Visit (<a href="http://www.examchunk.com">www.examchunk.com</a>) to sign up for free!</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              What are the available plans?
            </a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
          <div class="panel-body">
            <p>EXAM CHUNK has a number of predesigned plans to choose from based on the volume of tests and users required. For more details visit (<a href="http://www.examchunk.com">www.examchunk.com</a>).</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Which plan is suitable for me?
            </a>
          </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" aria-expanded="false">
          <div class="panel-body">
            <p>EXAM CHUNK has multiple plans on the basis of the volume of users or test you can see the bifurcations here (<a href="http://www.examchunk.com">www.examchunk.com</a>). If u have any confusion regarding the pricing, you can connect to our executives at +91 073734949</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSix">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              What is my visibility?
            </a>
          </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
          <div class="panel-body">
            <p>EXAM CHUNK believes in the saying “all work no show” hence we make sure that 100% visibility goes to the user and our name shall have no mention whatsoever which allows it to seem like your very own platform.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingSeven">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              How do I create tests?
            </a>
          </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven" aria-expanded="false">
          <div class="panel-body">
            <p>EXAM CHUNK makes it very easy to create a test simple through an excel sheet. For a detailed version of the process visit (<a href="http://www.examchunk.com">www.examchunk.com</a>).</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingEight">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              How do I design my tests?
            </a>
          </h4>
        </div>
        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight" aria-expanded="false">
          <div class="panel-body">
            <p>Designing your test has been simplified and personalized through EXAM CHUNK. You can customize your tests the way you want to. For a detailed description visit (<a href="http://www.examchunk.com">www.examchunk.com</a>).</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingNine">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              How do I assign my tests?
            </a>
          </h4>
        </div>
        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine" aria-expanded="false">
          <div class="panel-body">
            <p>Assigning tests to a number of selected users in super easy, through EXAM CHUNK. For further details visit (<a href="http://www.examchunk.com">www.examchunk.com</a>).</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTen">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              How do I view and process the results?
            </a>
          </h4>
        </div>
        <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen" aria-expanded="false">
          <div class="panel-body">
            <p>EXAM CHUNK helps you easily access to the auto generated results so you save your efforts. For more details visit (<a href="http://www.examchunk.com">www.examchunk.com</a>).</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingEleven">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
              How do I add users?
            </a>
          </h4>
        </div>
        <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven" aria-expanded="false">
          <div class="panel-body">
            <p>Adding users is super easy! All you need to do is login through your admin panel, go to the students section, click on add, fill the students credentials, submit and you are good to go!</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwelve">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
              How do I create a package?
            </a>
          </h4>
        </div>
        <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve" aria-expanded="false">
          <div class="panel-body">
            <p>You can also combine various tests to form a package and put it for purchase. All you need to do is visit the package section in your admin panel, and simply create a package by adding in the select few tests and it is ready for assigning to the candidates.</p>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="container welcome-section aboutContent text-justify">

        <h3>ACCOUNT MANAGEMENT BASED-</h3>

        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingaOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseaOne" aria-expanded="true" aria-controls="collapseaOne">
              How many tests can I generate?
            </a>
          </h4>
        </div>
        <div id="collapseaOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingaOne">
          <div class="panel-body">
            <p>The number of tests you are allowed to generate will depend upon the plan that you have selected. For more details visit (<a href="http://www.examchunk.com">www.examchunk.com</a>) or talk to our executive at (no). </p>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingaTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseaTwo" aria-expanded="false" aria-controls="collapseaTwo">
              How many packages can I generate?
            </a>
          </h4>
        </div>
        <div id="collapseaTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingaTwo">
          <div class="panel-body">
            <p>The number of packages that you can generate is unlimited as the number of combinations formed is up to you.</p>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingaThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseaThree" aria-expanded="false" aria-controls="collapseaThree">
              How many users can I add?
            </a>
          </h4>
        </div>
        <div id="collapseaThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingaThree">
          <div class="panel-body">
            <p>The number of users is dependent on the plan that you have subscribed for. For further details visit (<a href="http://www.examchunk.com">www.examchunk.com</a>).</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingaFour">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseaFour" aria-expanded="false" aria-controls="collapseaFour">
              Who owns the content after I upload it?
            </a>
          </h4>
        </div>
        <div id="collapseaFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingaFour">
          <div class="panel-body">
            <p>EXAM CHUNK serves as a platform to make your assessing experience easier, we have no ownership over any inputs that you make whatsoever, so that you can be assured that the ownership of your content shall never be breeched.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingaFive">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseaFive" aria-expanded="false" aria-controls="collapseaFive">
              Will EXAM CHUNK be visible to my users?
            </a>
          </h4>
        </div>
        <div id="collapseaFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingaFive">
          <div class="panel-body">
            <p>EXAM CHUNK shall not be visible to any of your users anywhere, so that it seems like your own platform to your users.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingaSix">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseaSix" aria-expanded="false" aria-controls="collapseaSix">
              How do I terminate my subscription?
            </a>
          </h4>
        </div>
        <div id="collapseaSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingaSix">
          <div class="panel-body">
            <p>To terminate your subscription please drop us a mail at <a href="mailto:subscription@examchunk.com">subscription@examchunk.com</a>.</p>
          </div>
        </div>
      </div>

    </div>

    </div>

    <div class="container welcome-section aboutContent text-justify">

        <h3>PAYMENT-</h3>

        <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabOne" aria-expanded="true" aria-controls="collapseabOne">
              How do I monetize my test?
            </a>
          </h4>
        </div>
        <div id="collapseabOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingbOne">
          <div class="panel-body">
            <p>After designing your test you can also monetize your test the way you plan. For further details visit (<a href="http://www.examchunk.com">www.examchunk.com</a>)</p>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabTwo" aria-expanded="false" aria-controls="collapseabTwo">
              What payment gateways work for the platform?
            </a>
          </h4>
        </div>
        <div id="collapseabTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingbTwo">
          <div class="panel-body">
            <p>We are available to serve you at most of the payment gateways like PayTM, PayUMoney, Razor Pay and many more!</p>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabThree" aria-expanded="false" aria-controls="collapseabThree">
              How do I upgrade to the paid version?
            </a>
          </h4>
        </div>
        <div id="collapseabThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingbThree">
          <div class="panel-body">
            <p>Once your free trial period expires, you will automatically be sent an email to enroll for a paid plan. In case you didn’t receive a mail, or can’t locate it click here (<a href="http://www.examchunk.com">www.examchunk.com</a>)</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbFour">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabFour" aria-expanded="false" aria-controls="collapseabFour">
              How do I upgrade my plan?
            </a>
          </h4>
        </div>
        <div id="collapseabFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingbFour">
          <div class="panel-body">
            <p>In case you want to upgrade you plan please contact your account manager.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbFive">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabFive" aria-expanded="false" aria-controls="collapseabFive">
              How do I downgrade my plan?
            </a>
          </h4>
        </div>
        <div id="collapseabFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingbFive">
          <div class="panel-body">
            <p>In case you want to downgrade you plan please contact your account manager.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbSix">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabSix" aria-expanded="false" aria-controls="collapseabSix">
              How do I download my invoice?
            </a>
          </h4>
        </div>
        <div id="collapseabSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingbSix">
          <div class="panel-body">
            <p>Once the invoice is generated it is by default mailed to u at your registered mail id but if u don’t receive it by any chance you can always generate it from your panel.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbSeven">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabSeven" aria-expanded="false" aria-controls="collapseabSeven">
              What is EXAM CHUNKS refund policy?
            </a>
          </h4>
        </div>
        <div id="collapseabSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingbSeven">
          <div class="panel-body">
            <p>EXAM CHUNK allows no refunds if the workings have already begun but in case u want a refund before the workings have begun please contact your account manager.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbEight">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabEight" aria-expanded="false" aria-controls="collapseabEight">
              What happens to my submitted card details?
            </a>
          </h4>
        </div>
        <div id="collapseabEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingbEight">
          <div class="panel-body">
            <p>EXAM CHUNK receives none of your private and confidential information including card details.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingbNine">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseabNine" aria-expanded="false" aria-controls="collapseabNine">
              What if I don’t renew my plans?
            </a>
          </h4>
        </div>
        <div id="collapseabNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingbNine">
          <div class="panel-body">
            <p>In case you come to the expiration of your plan and do not renew it, you will unfortunately be barred from using our services unless you pay for a plan.</p>
          </div>
        </div>
      </div>

    </div>

    </div>

    <div class="container welcome-section aboutContent text-justify">

        <h3>NOTIFICATIONS-</h3>

       <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingcOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseacOne" aria-expanded="true" aria-controls="collapseacOne">
              How do I send notifications?
            </a>
          </h4>
        </div>
        <div id="collapseacOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingcOne">
          <div class="panel-body">
            <p>Sending notifications from the notifications panel is super easy! In case you want assistance with regards to the notification sending feel free to reach out to your account manager.</p>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingcTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseacTwo" aria-expanded="false" aria-controls="collapseacTwo">
              How many notifications can I send?
            </a>
          </h4>
        </div>
        <div id="collapseacTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcTwo">
          <div class="panel-body">
            <p>Notifications are not bound by number but we suggest you to stick to the maximum of 3 per day.</p>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingcThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseacThree" aria-expanded="false" aria-controls="collapseacThree">
              Is there a character limit for my notifications?
            </a>
          </h4>
        </div>
        <div id="collapseacThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcThree">
          <div class="panel-body">
            <p>don’t know!</p>
          </div>
        </div>
      </div>

    </div>

    </div>-->
    <div class="section-padding"></div>
    <div class="clearfix"></div>
@stop