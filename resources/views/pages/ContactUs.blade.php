@extends('layout.default')

@section('content')
  <div class="page-content bg-white">
        <!-- Contact Form -->
		<div class="section-full content-inner contact-page-9 overlay-black-dark" style="background-image: url({{asset('images/background/bg5.jpg')}}); background-position: 30% 100%">
			<div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 text-white">
						<div class="row">
							<div class="col-lg-12 col-md-12 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary"><i class="ti-location-pin"></i></span> 
											Company Address
										</h5>
										<p>007 Dummy Ashoka Apartment, Gautam Marg, Rani Sati Nagar,Jaipur / India </p>
										<h6 class="m-b15 text-black font-weight-400"><i class="ti-alarm-clock"></i> Office Hours</h6>
										<p class="m-b0">Mon To Sat - 10.00 - 07.00</p>
										<p>Sunday - Close</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary"><i class="ti-email"></i></span> 
											E-mail
										</h5>
										<p class="m-b0">info@example.com</p>
										<p class="m-b0">hr@example.com</p>
										<p class="m-b0">support@example.com</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary"><i class="ti-mobile"></i></span> 
											Phone Numbers
										</h5>
										<p class="m-b0">+91-80033-93704</p>
										<p class="m-b0">+91-80033-96875</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-12 m-b30">
						<form class="inquiry-form wow box-shadow bg-white fadeInUp" data-wow-delay="0.2s" action="{{route('contact')}}" method="post">
							<h3 class="title-box font-weight-300 m-t0 m-b10">{{ __('lets')}} Convert Your Idea into Reality <span class="bg-primary"></span></h3>
						
							<div class="row">
														<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-user text-primary"></i></span>
    {!!csrf_field() !!}
											<input name="Name" type="text" required class="form-control" placeholder="@lang('home.Name')">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
											<input name="Phone" type="text" required class="form-control" placeholder="@lang('home.phone')">
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="input-group"> 
											<span class="input-group-addon"><i class="ti-email text-primary"></i></span>
											<input name="Email" type="email" class="form-control" required  placeholder=" @lang('home.Email')" >
										</div>
									</div>
								</div>
								
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
											<textarea name="Message" rows="4" class="form-control" required placeholder="@lang('home.message')"></textarea>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<button name="submit" type="submit" value="Submit" class="site-button button-md"> <span>Get A Free Quote!</span> </button>
								</div>
							</div>
						</form>	
					</div>
				</div>
            </div>
		</div>
        <!-- Contact Form END -->
    </div>
    @endsection