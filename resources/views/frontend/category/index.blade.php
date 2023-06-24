@extends('layouts.frontend')
@section('content-frontend')
	@if($categoryShow->slug == 'about')
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/assets/images/bg/bg1.jpg')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
        <div class="breadcrumb-outer">
           <div class="container">
              <div class="breadcrumb-content text-center">
                 <h1 class="mb-3">{!! $categoryShow->name !!}</h1>
                 <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page">{!! $categoryShow->name !!}</li>
                    </ul>
                 </nav>
              </div>
           </div>
        </div>
        <div class="dot-overlay"></div>
     </section>

	@php
	   $abouts = App\Models\About::where('status', 1)->latest()->first();
	@endphp

<section class="about-us pt-6" style="background-image:url(images/background_pattern.png); background-position:bottom right;">
    <div class="container">
       <div class="about-image-box">
          <div class="row d-flex align-items-center justify-content-between">
             <div class="col-lg-6 ps-4">
                <div class="about-content text-center text-lg-start">
                   <h4 class="theme d-inline-block mb-0">{!! $abouts->title !!}</h4>
                   <h2 class="border-b mb-2 pb-1">{!! $abouts->experience_title !!}</h2>
                   <p class="border-b mb-2 pb-2" style="justify-content: center;">
                        <?php $des =  strip_tags(html_entity_decode($abouts->description))?>
                        {{ Str::limit($des, $limit = 850, $end = '. . .') }}
                   </p>
                   {{-- <div class="about-listing">
                      <ul class="d-flex justify-content-between">
                         <li><i class="icon-location-pin theme"></i> Tour Guide</li>
                         <li><i class="icon-briefcase theme"></i> Friendly Price</li>
                         <li><i class="icon-folder theme"></i> Reliable Tour Package</li>
                      </ul>
                   </div> --}}
                </div>
             </div>
             <div class="col-lg-6 mb-4 pe-4">
                <div class="about-image" style="animation:none; background:transparent;">
                   <img src="{{ asset($abouts->image) }}" alt>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="counter-main w-75 float-start z-index3 position-relative">
                   <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
                      <div class="row">
                        @php
                            $counters = App\Models\Counter::where('status', 1)->latest()->get();
                        @endphp
                        @foreach($counters as $counter)
                         <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="counter-item border-end pe-4">
                               <div class="counter-content">
                                  <h2 class="value mb-0 theme">{{ $counter->counter_no }}</h2>
                                  <span class="m-0">{{ $counter->title }}</span>
                               </div>
                            </div>
                         </div>
                        @endforeach
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="white-overlay"></div>
 </section>
	@endif
	@if($categoryShow->slug == 'services')
	@php
		$services = App\Models\Service::where('status', 1)->latest()->get();
	@endphp
	<!-- Sub banner start -->
	<section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/assets/images/bg/bg1.jpg')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('frontend/assets/images/shape8.png ')}}');"></div>
        <div class="breadcrumb-outer">
           <div class="container">
              <div class="breadcrumb-content text-center">
                 <h1 class="mb-3">{!! $categoryShow->name !!}</h1>
                 <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page">{!! $categoryShow->name !!}</li>
                    </ul>
                 </nav>
              </div>
           </div>
        </div>
        <div class="dot-overlay"></div>
     </section>
     <section class="trending bg-grey pt-17 pb-6">
        <div class="section-shape top-0" style="background-image: url({{asset('frontend/assets/images/shape8.png')}});"></div>
        <div class="container">
           <div class="row align-items-center justify-content-between mb-6 ">
              <div class="col-lg-7">
                @php
                    $sections = App\Models\Section::orderBy('created_at','asc')->skip(2)->take(1)->get();
                @endphp
                @foreach($sections as $section)
                 <div class="section-title text-center text-lg-start">
                    <h4 class="mb-1 theme1">{{ $section->name ?? 'Null'}}</h4>
                    <h2 class="mb-1"><span class="theme">{{ $section->title ?? 'Null'}}</span></h2>
                 </div>
                 @endforeach
              </div>
              <div class="col-lg-5"></div>
           </div>
           <div class="trend-box">
            @php
                $services = App\Models\Service::where('status', 1)->latest()->get();
            @endphp
              <div class="row item-slider">
                @foreach($services as $service )
                 <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item rounded box-shadow bg-white">
                       <div class="trend-image position-relative">
                          <img src="{{ asset($service->icon) }}" alt="image" class>
                          <div class="color-overlay"></div>
                       </div>
                       <div class="trend-content p-4 pt-5 position-relative">
                          <h3 class="mb-1"><a href="{{ route('service.single.page',$service->slug)}}">{{ $service->title ?? 'Null'}}</a></h3>
                          <p class="pb-2 mb-2">
                            <?php $des =  strip_tags(html_entity_decode($service->description))?>
                            {{ Str::limit($des, $limit = 70, $end = '. . .') }}
                          </p>
                          <div class="entry-meta">
                            <a href="{{ route('service.single.page',$service->slug)}}" class="nir-btn">Read More</a>
                          </div>
                       </div>
                    </div>
                 </div>
                @endforeach
              </div>
           </div>
        </div>
     </section>
	<!-- Sub Banner end -->
	@endif
	@if($categoryShow->slug == 'blog')
	<!--Page Header Start-->
    <!-- Sub banner start -->
	<div class="sub-banner">
	    <div class="container">
	        <div class="breadcrumb-area">
	            <h1>{{ $categoryShow->name ?? 'Null'}} </h1>
	            <ul class="breadcrumbs">
	                <li><a href="#">Home</a></li>
	                <li class="active">{{ $categoryShow->name ?? 'Null'}}</li>
	            </ul>
	        </div>
	    </div>
	</div>
	<!-- Sub Banner end -->
    <!--Page Header End-->
    @php
     $blogs = App\Models\Blog::where('status', 1)->latest()->get();
   @endphp
   <!-- Blog body start -->
	<div class="blog-body content-area">
	    <div class="container">
	        <div class="row">
	        	@foreach($blogs as $blog)
	            <div class="col-lg-4 col-md-6 col-sm-12">
	                <div class="blog-3">
	                    <div class="blog-image">
	                        <img src="{{ asset($blog->blog_image) }}" width="336" height="224" alt="blog-3" class="img-fluid">
	                        <div class="date-box">{{ $blog->created_at->format('l jS \\of F Y h:i:s A') }}</div>
	                        <div class="post-meta clearfix">
	                            <span><a href="#"><i class="fa fa-user"></i></a> Admin</span>
	                            <span><a href="#"><i class="fa fa-calendar"></i></a> 17K</span>
	                            <span><a href="#"><i class="fa fa-comments"></i></a> 73k</span>
	                        </div>
	                    </div>
	                    <div class="detail">
	                        <h4>
	                            <a href="#">{{ $blog->title ?? 'Null'}}</a>
	                        </h4>
	                        <p> <?php $des =  strip_tags(html_entity_decode($blog->description))?>
                                 {{ Str::limit($des, $limit = 300, $end = '. . .') }}</p>
	                        <a href="#" class="read-more">Read More...</a>
	                    </div>
	                </div>
	            </div>
	            @endforeach

	            <div class="col-lg-12">
	                <!-- Pagination box start -->
	                <div class="pagination-box text-center">
	                    <nav aria-label="Page navigation example">
	                        <ul class="pagination">
	                            <li class="page-item">
	                                <a class="page-link" href="#">Prev</a>
	                            </li>
	                            <li class="page-item"><a class="page-link  active" href="#">1</a></li>
	                            <li class="page-item"><a class="page-link" href="#">2</a></li>
	                            <li class="page-item"><a class="page-link" href="#">3</a></li>
	                            <li class="page-item">
	                                <a class="page-link" href="#">Next</a>
	                            </li>
	                        </ul>
	                    </nav>
	                </div>
	                <!-- Pagination box end -->
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Blog body end -->
	@endif
	@if($categoryShow->slug == 'tours')
	<!-- Sub banner start -->

	@endif

	<!-- start contact us section -->
	@if($categoryShow->slug == 'contact-us')
	<!-- Sub banner start -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/assets/images/bg/bg1.jpg')}});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('frontend/assets/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
           <div class="container">
              <div class="breadcrumb-content text-center">
                 <h1 class="mb-3">{{ $categoryShow->name ?? 'Null'}}</h1>
                 <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page">{{ $categoryShow->name ?? 'Null'}}</li>
                    </ul>
                 </nav>
              </div>
           </div>
        </div>
        <div class="dot-overlay"></div>
     </section>
	<!-- Sub Banner end -->
	<!-- Contact 1 start -->
    <section class="contact-main pt-6 pb-60">
        <div class="container">
           <div class="contact-info-main mt-0">
              <div class="row">
                 <div class="col-lg-10 col-offset-lg-1 mx-auto">
                    <div class="contact-info bg-white">
                       <div class="contact-info-title text-center mb-4 px-5">
                          <h3 class="mb-1">INFORMATION CONTACT US</h3>
                       </div>
                       <div class="contact-info-content row mb-1">
                          <div class="col-lg-4 col-md-6 mb-4">
                             <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                <div class="info-icon mb-2">
                                   <i class="fa fa-map-marker-alt theme"></i>
                                </div>
                                <div class="info-content">
                                   <h3>Office Location</h3>
                                   <p class="m-0">{{ get_setting('business_address')->value ?? 'null'}}</p>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-6 mb-4">
                             <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                <div class="info-icon mb-2">
                                   <i class="fa fa-phone theme"></i>
                                </div>
                                <div class="info-content">
                                   <h3>Phone Number</h3>
                                   <p class="m-0">{{ get_setting('phone')->value ?? 'null'}}</p>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-md-12 mb-4">
                             <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                <div class="info-icon mb-2">
                                   <i class="fa fa-envelope theme"></i>
                                </div>
                                <div class="info-content ps-4">
                                   <h3>Email Address</h3>
                                   <p class="m-0"><a href="mailto:{{ get_setting('email')->value ?? 'null' }}" >{{ get_setting('email')->value ?? 'null' }}</a></p>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div id="contact-form1" class="contact-form">
                          <div class="row">
                             <div class="col-lg-6">
                                <div class="map rounded overflow-hiddenb rounded mb-md-4">
                                   <div style="width: 100%">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7509101.4125301605!2d80.74724771381447!3d23.222939993375874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1685965056920!5m2!1sen!2sbd" width="" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div id="contactform-error-msg"></div>
                                <form method="post" action="#" name="contactform2" id="">
                                   <div class="form-group mb-2">
                                      <input type="text" name="first_name" class="form-control" id="fullname" placeholder="First Name" required>
                                   </div>
                                   <div class="form-group mb-2">
                                      <input type="text" name="last_name" class="form-control" id="llastname" placeholder="Last Name" required>
                                   </div>
                                   <div class="form-group mb-2">
                                      <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                   </div>
                                   <div class="form-group mb-2">
                                      <input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone" required>
                                   </div>
                                   <div class="textarea mb-2">
                                      <textarea name="comments" placeholder="Enter a message"></textarea>
                                   </div>
                                   <div class="comment-btn text-center">
                                      <input type="submit" class="nir-btn" id="submit2" value="Send Message">
                                   </div>
                                </form>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
	<!-- Contact 1 end -->
	@endif
	<!-- end contact us section -->
@endsection
