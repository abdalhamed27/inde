@extends('layout.default')

@section('content')

    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">About us 2</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>About us 2</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- About Us -->
			<div class="section-full content-inner bg-white">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12 m-b30">
							<div class="our-story">
								<span><h1>@lang('home.about')</h1></span>
								<p>@lang('home.abou')</p>
								
							</div>
						</div>
						<div class="col-lg-6 col-md-12 m-b30 our-story-thum">
							<img src="images/about/pic6.jpg" class="radius-sm" alt="">
						</div>
					</div>
				</div>
			</div>
			<!-- About Us End -->
			<!-- Abouts -->
		
			<!-- Abouts END -->
			<!-- Our Services -->
			<div class="section-full bg-gray content-inner">
				<div class="container">
					<div class="section-head text-center">
						<h2 class="title">@lang('home.about')</h2>
					
					</div>
					<div class="section-content row">
						<div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
							<div class="icon-bx-wraper arbi" >
							<h2 class="text-center">	@lang('home.vision')</h2>

								<div class="icon-content">
									<p>@lang('home.dvision')</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
							<div class="icon-bx-wraper arbi">
							<h3 class="text-center">@lang('home.mission')</h3>

								<div class="icon-content">
									<p>@lang('home.dmission')</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-sm-12 service-box style3">
							<div class="icon-bx-wraper arbi" >
								<h3 class="text-center">@lang('home.value')</h3>
								<div class="icon-content">
								<ul>
										@lang('home.dvalue')
									</ul> 
								</div>
							</div>
						</div>
				
					</div>
				</div>
			</div>
			<!-- Our Services End -->
		
    @endsection