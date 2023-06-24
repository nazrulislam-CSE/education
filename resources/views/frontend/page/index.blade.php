@extends('layouts.frontend')
@section('content-frontend')
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/assets/images/bg/bg1.jpg')}});">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('frontend/assets/images/shape8.png' )}});"></div>
    <div class="breadcrumb-outer">
       <div class="container">
          <div class="breadcrumb-content text-center">
             <h1 class="mb-3">{{ $page->name ?? 'NULL' }}</h1>
             <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">{{ $page->name ?? 'NULL' }}</li>
                </ul>
             </nav>
          </div>
       </div>
    </div>
    <div class="dot-overlay"></div>
 </section>
 <section class="blog blog-left pt-10">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12">
             <div class="blog-single">
                <div class="blog-single-in d-md-flex align-items-center mb-4 text-center text-md-start">

                   <div class="blog-single-in-cont w-75">
                      <div class="blog-content">
                         <h2 class="blog-title mb-0"><a href="#" class>{{ $page->title ?? 'NULL' }}</a></h2>
                      </div>
                   </div>
                </div>
                <div class="blog-wrapper">
                   <div class="blog-content">
                      <p class="mb-3">
                        {!! $page->description ?? 'NULL' !!}
                      </p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-12">
             <div class="sidebar-sticky">
                <div class="list-sidebar">
                   <div class="sidebar-item mb-4">
                      <h4 class>Popular Pages</h4>
                      <ul class="sidebar-category">
                        @foreach(get_pages_both_footer() as $page)
                            <li><a href="{{ route('page.about', $page->slug) }}">{{ $page->name ?? 'Null' }}</a></li>
                        @endforeach
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
