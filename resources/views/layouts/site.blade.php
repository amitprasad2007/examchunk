<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Exam Chunk</title>

    <!-- Bootstrap -->
    <link rel="shortcut icon" href="{!! asset('design/site/images/logo.png')!!}">
    <link rel="shortcut icon" href="{!! asset('design/site/images/logo.png')!!}">
    <link href="{!! asset('design/site/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('design/site/css/owl.carousel.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('design/site/css/owl.theme.default.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('design/site/css/fontello.css')!!}" rel="stylesheet">
    <link href="{!! asset('design/site/css/aos.css')!!}" rel="stylesheet">
    <link href="{!! asset('design/site/css/style.css')!!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('design/site/css/stroke-gap-icon.css')!!}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{!! URL::to('') !!}">
          	<img src="{!! asset('design/site/images/logo.png')!!}" alt="logo">Exam Chunk</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{!! URL::to('about-us') !!}">About Us</a></li>            
            <li><a href="{!! URL::to('pricing') !!}">Pricing</a></li>
            <li><a href="{!! URL::to('trial') !!}">Free Trial</a></li>
            <li><a href="{!! URL::to('request-demo') !!}">Request Demo</a></li>
            <li><a href="{!! URL::to('features') !!}">Features</a></li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true">Help</a>
                <ul class="dropdown-menu">
                    <li><a href="{!! URL::to('faqs') !!}">Faq's</a></li>
                    <li><a href="{!! URL::to('support') !!}">Support</a></li>
                </ul>
            </li>
            <li><a href="{!! URL::to('contact-us') !!}">Contact Us</a></li>
            <li><a href="{!! URL::to('trial') !!}">Sign Up</a></li>
            <li><a href="{!! URL::to('login') !!}" class="loginbtn" target="_blank">Login</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    @yield('content')
    <footer class="footer-main footer2 container-fluid">	
		<!-- Container -->
		<div class="container">
			<!--<div class="row">
				<div class="col-md-3 col-sm-6">
					<aside class="ftr-widget about_widget">
						<a class="footer-logo" href="#" title="Logo"><img alt="logo" src="{!! asset('design/site/logo.png')!!}">Exam Chunk</a>
						<span>'Exam Chunk' is a software created by Airbound Solutions Pvt. Ltd. with a network infrastructure built to last in the world of today.</span>
						<p><span class="icon icon-Plaine"></span>Address : 56E Hemanta Basu Sarani Kolkata-700001</p>
						<p><span class="icon icon-Phone2"></span>Phone : <a title="9073734949" href="tel:9073734949">9073734949</a></p>
						<p><span class="icon icon-Mail"></span>Email : <a title="sales@examchunk.com" href="mailto:sales@examchunk.com">sales@examchunk.com</a></p>
					</aside>
				</div>
				<div class="col-md-3 col-sm-6">	
					<aside class="ftr-widget useful-llink">
						<h3 class="widget-title">Useful Links</h3>
						<ul>
							<li><a href="about-us.html">ABOUT US</a></li>
							<li><a href="contact.html">CONTACT US</a></li>
							<li><a href="faqs.html">FAQ’s</a></li>
							<li><a href="pricing.html">PRICING AND PAYMENT</a></li>
							<li><a href="privacy-policy.html">PRIVACY POLICY</a></li>
							<li><a href="terms-of-use.html">TERMS OF USE</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-md-3 col-sm-6">
					<aside class="ftr-widget newsletter_widget">
						<h3 class="widget-title">News Letters</h3>
						<p>Subscribe Our Newsletter get the Important News. The Amazing Offers &amp; Inside Scoops:</p>
						 <div class="input-group">
							<input type="text" class="form-control" placeholder="Enter your email">
							<span class="input-group-btn"><button class="btn" type="button" title="Go">Go</button></span>
						</div>
						<ul>
							<li><a href="https://www.facebook.com/examchunk/" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/company/examchunk/" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/examchunk/" title="Instagram"><i class="fa fa-instagram"></i></a></li> 
						</ul>
					</aside>
				</div>
				<div class="col-md-3 col-sm-6">
					<aside class="ftr-widget newsletter_widget">
						<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/j-GHT1gpo6-.js?version=43#channel=f2d67471aa6ed74&amp;origin=http%3A%2F%2Fwww.examchunk.com" style="border: none;"></iframe></div><div></div></div></div>
						<script async="" src="https://embed.tawk.to/5c2b80157a79fc1bddf2dc77/default" charset="UTF-8" crossorigin="*"></script><script id="facebook-jssdk" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&amp;version=v3.2"></script><script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/examchunk/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=270&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fexamchunk%2F&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"><span style="vertical-align: bottom; width: 270px; height: 223px;"><iframe name="f308ce4bfde5418" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fj-GHT1gpo6-.js%3Fversion%3D43%23cb%3Df285a0bb928352c%26domain%3Dwww.examchunk.com%26origin%3Dhttp%253A%252F%252Fwww.examchunk.com%252Ff2d67471aa6ed74%26relation%3Dparent.parent&amp;container_width=270&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fexamchunk%2F&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" style="border: none; visibility: visible; width: 270px; height: 223px;" class=""></iframe></span></div>
					</aside>
				</div>
			</div>-->
			<!-- Footer Bottom -->
            
			<div class="col-md-12 col-sm-12">
                <aside class="ftr-widget newsletter_widget">
				<ul>
                    <li><a href="https://www.facebook.com/examchunk/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/examchunk/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/examchunk/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li> 
                </ul>
                </aside>
				<ul class="nav navbar-nav">
                    <!--<li><a href="#" title="About">Blogs</a></li>-->
                    <li><a href="{!! URL::to('about-us') !!}" title="About">About Us</a></li>
                    <li><a href="{!! URL::to('contact-us') !!}" title="Contact">Contact Us</a></li>
                    <li><a href="{!! URL::to('terms-of-use') !!}" title="Contact">Terms Of Use</a></li>
                    <li><a href="{!! URL::to('privacy-policy') !!}" title="Contact">Privacy Policy</a></li>
                </ul>
			</div><!-- Footer Bottom /- -->
            <div class="col-md-12 col-sm-12 copyright">
                <span>© Lodha Skill Academy 2019</span>
            </div>
		</div><!-- Container /- -->
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!! asset('design/site/js/bootstrap.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('design/site/js/owl.carousel.min.js')!!}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
    $('.dropdown-toggle').mouseover(function() {
        $('.dropdown-menu').show();
    })

    $('.dropdown-toggle').mouseout(function() {
        t = setTimeout(function() {
            $('.dropdown-menu').hide();
        }, 100);

        $('.dropdown-menu').on('mouseenter', function() {
            $('.dropdown-menu').show();
            clearTimeout(t);
        }).on('mouseleave', function() {
            $('.dropdown-menu').hide();
        })
    })
})
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#owl-testimonial').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                responsive:{
                    0:{
                        items: 1
                    },
                    600:{
                        items: 2
                    },
                    1000:{
                        items: 3
                    }
                }
            });
        });
    </script>
    <script type="text/javascript" src="{!! asset('design/site/js/canvasdots.min.js')!!}"></script>
    <script type="text/javascript">
    	var canvas;
		$(document).ready(function(){
		    canvas = $('#myCanvas1').canvaDots({
		        sizeDependConnections: false,
		        randomBounceSides: false,
		        dotsColor:[0,0,0,1],
		        linesColor:[0,0,0]
		    });

		    // ==== EXAMPLE CALL METHODS ====
		    canvas.stopAnimation(); //Stop animation
		    canvas.startAnimation(); //Start animation
		});
    </script>
    <script type="text/javascript" src="{!! asset('design/site/js/aos.js')!!}"></script>
    <script type="text/javascript">
		AOS.init({
			easing: 'ease-out-back',
			duration: 1000
		});
    </script>
    <script type="text/javascript">
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 0) {
                $(".navbar").addClass("stickey");
            } else {
                $(".navbar").removeClass("stickey");
            }
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c2b80157a79fc1bddf2dc77/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
  </body>
</html>