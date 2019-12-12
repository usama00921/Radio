<header>
        		<!-- Start header top -->
        		<div class="header-top">
        			<div class="container">
        				<div class="row">
        					<div class="col-sm-5 col-md-6">
	                            <div class="top-social">
	                                <nav>
	                                	<ul>
		                                    <li><a href="#">Follow Us On:</a></li>
		                                    <li><a href="{{$info->Fb_link}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		                                    <li><a href="{{$info->Twitter_link}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		                                    <li><a href="{{$info->Gmail_link}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		                                    <li><a href="{{$info->Linked_in}}"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
		                                    <li><a href="{{$info->Internet_link}}"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
		                                    <li><a href="{{$info->Internet_link}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		                                </ul>
	                                </nav>
	                            </div>
	                        </div>
	                        <div class="col-sm-7 col-md-6">
	                            <div class="call-to-action">
	                                <nav>
	                                	<ul>
		                                	<li><a href="{{$info->Email}}"><i class="fa fa-envelope" aria-hidden="true"></i> Email: {{$info->Email}}</a></li>
		                                	<li><a href="tel:{{$info->Phone_num}}"><i class="fa fa-phone" aria-hidden="true"></i> Phone: {{$info->Phone_num}}</a></li>
		                                	<!-- <li><a href="">EN <i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul>
													<li><a href="#">ENGLISH</a></li>
													<li><a href="#">FRANCE</a></li>
													<li><a href="#"></a></li>
												</ul>
		                                	</li> -->
		                                </ul>
	                                </nav>
	                            </div>
	                        </div>
        				</div>
        			</div>
        		</div>
        		<!-- End header top -->
        		<!-- Start main menu area -->
        		<div class="main-menu-area" id="sticker">
        			<div class="container">
        				<div class="row">
        					<div class="col-sm-3 col-xs-12">
        						<div class="logo ptb-32">
        							<a href="/">
        								<img src="/img/logo.png" alt="">
        							</a>
        						</div>
        					</div>
        					<div class="col-sm-9 col-xs-12">
        						<div class="main-menu">
								<nav>
								{!! $TopBar->asUl(array('class' => ''),['class'=>'drop-menu'],[] ) !!}
								</nav>
        						</div>
        						<div class="donate-button ptb-32">
        							<a class="waves-effect waves-light" href="#">Donate</a>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<!-- End main menu area -->
                <!-- Start mobile menu -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                                <nav id="dropdown">
								{!! $TopBar->asUl(array('class' => 'nav'),['class'=>'drop-menu'],[] ) !!}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End mobile menu -->
        	</header>