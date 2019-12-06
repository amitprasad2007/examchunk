@extends('layouts.site')
@section('content')

<div class="introSection inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Support</h1>
                </div>
            </div>
        </div>
        <div class="divider-shape"><!-- waves divider --> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shape-waves" style="left: 0; transform: rotate3d(0,1,0,180deg);">
                <path class="shape-fill shape-fill-2" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
            </svg>
        </div>
    </div>
    <!--<div class="introSection inner">
    	<canvas id="myCanvas1"></canvas>
        <div class="container text-center">
            <h1 data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Support</h1>
        </div>
    </div>-->

    <div class="clearfix"></div>

    <!-- <div class="container">
        <section class="knowledge-base">
            <div class="category-tree">
                <div class="row">
                    <div class="col-xs-12">
                        <section class="category" id="cat">
                            <h2>How may I help you !</h2>                               
                        </section>
                        <div class="pricingSection" id="pad">
                            <div class="container">
                                <ul class="pricinglist1">
                                    <li>
                                        <div class="pricingBlock1" data-toggle="modal" data-target="#myModal1">
                                            <div class="pricingHeader1">
                                                <h4><img class="pic" src="{!! asset('design/site/images/movie-tickets.svg')!!}"></h4>
                                                <h2><span>NEW SUPPORT TICKET</span></h2>
                                                <h5>Fluent Ticket Generation</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pricingBlock1">
                                            <div class="pricingHeader1">
                                                <h4><img class="pic" src="{!! asset('design/site/images/data.svg')!!}" style="width: 70px;"></h4>
                                                <h2><span>CHECK TICKET STATUS</span></h2>
                                                <h5>Active allocation and processing</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pricingBlock1" data-toggle="modal" data-target="#myModal2">
                                            <div class="pricingHeader1">
                                                <h4><img class="pic" src="{!! asset('design/site/images/data.svg')!!}" style="width: 70px;"></h4>
                                                <h2><span>CHECK TICKET STATUS</span></h2>
                                                <h5>Active allocation and processing</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </section>
    </div> -->

    <!--Modal 1-->
    <div class="modal fade bs-example-modal-sm" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title getintouch" id="myModalLabel">Ticket Generation</h3>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSubject">Subject</label>
                            <input type="text" class="form-control" id="exampleInputSubject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMessage">Message</label>
                            <textarea class="form-control" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-primary pricingbtn" id="modbtn" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
<!--Modal 2-->
    <div class="modal fade bs-example-modal-sm" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modbtn1 modal-title getintouch" id="myModalLabel">Ticket Status</h3>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputNumber">Ticket Number</label>
                            <input type="number" class="form-control" id="exampleInputNumber" placeholder="Ticket Number">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary pricingbtn" id="modbtn" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="contactSection contact">
        <div class="container">
            <h2>How can <span>we help?</span></h2>
            <h5>Got a question? We’d love to hear from you.<br/>Send us a message and we’ll respond as soon as possible.</h5>
            <div class="row">
                <div class="col-md-4">
                    <img src="{!! asset('design/site/images/address.svg')!!}">
                    <h3>Vist Our Office</h3>
                    <p>We are just a cal away at-<br/><a href="skype:+919073734949" title="+919073734949">+91 90737 34949</a></p>
                </div>
                <div class="col-md-4">
                    <img src="{!! asset('design/site/images/customer-service.svg')!!}">
                    <h3>Give us a Call</h3>
                    <p>56E Hemanta Basu Sarani Kolkata-700001<br/><a href="#" title="Get Direction">Get Direction</a></p>
                </div>
                <div class="col-md-4">
                    <img src="{!! asset('design/site/images/paper-plane.svg')!!}">
                    <h3>Drop us a Line</h3>
                    <p>Dropping us a mail at-<br/><a href="mailto:sales@examchunk.com" title="sales@examchunk.com">sales@examchunk.com</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

@stop