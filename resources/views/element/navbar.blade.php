<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header mo-left header">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="dlab-topbar-left">
						<ul>
							<li><a href="about-1.html">About Us</a></li>
							<li><a href="privacy-policy.html">Refund Policy</a></li>
							<li><a href="help-desk.html">Help Desk</a></li>
						</ul>
					</div>
					<div class="dlab-topbar-right">
						<a href="contact-1.html" class="site-button radius-no btnhover13">GET A QUOTE</a>						
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.html"><img src="images/logo.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
						</div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="ti-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header d-md-block d-lg-none">
							<a href="index.html"><img src="images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<li class="active has-mega-menu homedemo"> <a href="{{url('/')}}">@lang('home.home')<i class="fa fa-chevron-down"></i></a>

							</li>
									

							
								
									<li> 
										<a href="{{ route('ABOUT',app()->getLocale()) }}"> @lang('home.about') <i class="fa fa-angle-right"></i></a>
									</li>	
									<li> 
										<a href="{{route('ContactUs',app()->getlocale())}}">@lang('home.contactus') <i class="fa fa-angle-right"></i></a>
									
									</li>
									
									<li> 
										<a href="{{route('shop',app()->getlocale())}}">@lang('home.shop')  <i class="fa fa-angle-right"></i></a>
									</li>
                                                                	<li>
								<a href="javascript:;">@lang('home.language')<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu tab-content">
									<li>
										<a href="locale/en">ENGLISH<img src="{{asset('images/uk.png')}}" width="20" height="20"></a>
										
									</li>	
									<li>  <a href="locale/ar">arabic<img src="{{asset('images/egypt.png')}}"  width="20" height="20"></i></a>
							</li>
										

									<li> 
										<a href="javascript:;"><a href="locale/fr">france<img src="{{asset('images/france.png')}}"  width="20" height="20"></a>
									
									</li>
								</ul>
							</li>        
								
								</ul>
						</li>
							
							
									
						<div class="dlab-social-icon">
							<ul>
								<li><a class="site-button facebook circle-sm outline fa fa-facebook" href="javascript:void(0);"></a></li>
								<li><a class="site-button twitter circle-sm outline fa fa-twitter" href="javascript:void(0);"></a></li>
								<li><a class="site-button linkedin circle-sm outline fa fa-linkedin" href="javascript:void(0);"></a></li>
								<li><a class="site-button instagram circle-sm outline fa fa-instagram" href="javascript:void(0);"></a></li>
							</ul>
						</div>
					</div>
				 </div>
            </div>
        </div>
        <!-- main header END -->
    </header>