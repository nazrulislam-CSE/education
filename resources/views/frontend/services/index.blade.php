@extends('layouts.frontend')
@section('content-frontend')
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/assets/images/bg/bg1.jpg')}});">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('frontend/assets/images/shape8.png' )}});"></div>
    <div class="breadcrumb-outer">
       <div class="container">
          <div class="breadcrumb-content text-center">
             <h1 class="mb-3">Service Detail</h1>
             <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Service Detail</li>
                </ul>
             </nav>
          </div>
       </div>
    </div>
    <div class="dot-overlay"></div>
 </section>
 <section class="about-us pt-6 pb-0">
    <div class="container">
       <div class="about-image-box">
          <div class="row">
             <div class="col-lg-8 col-sm-12 pe-lg-4">
                <div class="about-content">
                   <h2 class="mb-3">{{ $serviceShow->title ?? "Null"}}</h2>
                   <div class="about-image rounded mb-3 overflow-hidden">
                      <img src="{{ asset($serviceShow->icon) }}" alt class="w-100">
                   </div>
                   <p class="mb-0">
                     {!! $serviceShow->description ?? "Null" !!}
                   </p>
                </div>
             </div>
             <div class="col-lg-4 col-sm-12 ps-lg-4">
                <div class="sidebar-sticky">
                   <div class="list-sidebar">
                      <div class="popular-post sidebar-item mb-4">
                         <h3 class>Related Services</h3>
                         <div class="sidebar-tabs">
                            <div class="post-tabs">
                               <div class="tab-content" id="postsTabContent1">
                                 @php
                                    $services = App\Models\Service::where('status', 1)->latest()->get();
                                 @endphp
                                  <div class="tab-pane fade active show" id="popular" role="tabpanel">
                                    @foreach($services->take(3) as $service )
                                     <article class="post mb-3 border-b pb-3">
                                        <div class="s-content d-flex align-items-center justify-space-between">
                                           <div class="sidebar-image w-25 me-3">
                                              <a href="{{ route('service.single.page',$service->slug)}}"><img src="{{ asset($service->icon) }}" alt></a>
                                           </div>
                                           <div class="content-list w-75">
                                              <h5 class="mb-1"><a href="{{ route('service.single.page',$service->slug)}}">{{ $service->title ?? 'Null'}}</a></h5>
                                              <div class="date">{{ \Carbon\Carbon::parse($service->created_at)->format('j F, Y') }}</div>
                                           </div>
                                        </div>
                                     </article>
                                     @endforeach
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
