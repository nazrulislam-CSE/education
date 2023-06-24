@extends('layouts.frontend')
@section('content-frontend')
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{asset('frontend/assets/images/bg/bg1.jpg')}});">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('frontend/assets/images/shape8.png' )}});"></div>
    <div class="breadcrumb-outer">
       <div class="container">
          <div class="breadcrumb-content text-center">
             <h1 class="mb-3">{{ $blogShow->title ?? 'NULL' }}</h1>
             <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">{{ $blogShow->title ?? 'NULL' }}</li>
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
                         <h2 class="blog-title mb-0"><a href="{{ route('property.single.blog',$blogShow->slug)}}" class>{!! $blogShow->title !!}</a></h2>
                      </div>
                   </div>
                </div>
                <div class="blog-wrapper">
                   <div class="blog-content">
                      <div class="blog-imagelist mb-3">
                         <img src="{{ asset($blogShow->blog_image) }}" alt="image" class="rounded">
                      </div>
                      <div class="row align-items-center">
                        <div class="col-lg-12 mb-4">
                           <div class="cover-content text-center text-md-start">
                              <div class="author-detail mb-2">
                                 <a href="{{ route('property.single.blog',$blogShow->slug)}}" class="tag white bg-theme py-1 px-3 me-2 rounded">{{ $blogShow->category->name ?? 'Null'}}</a>
                                 <a href="{{ route('property.single.blog',$blogShow->slug)}}" class="tag py-1 px-3"><i class="fa fa-eye"></i> {{ $blogShow->view ?? '0'}} Views</a>
                              </div>
                              <div class="author-detail d-flex align-items-center">
                                 <span class="me-3"><a href="{{ route('property.single.blog',$blogShow->slug)}}"><i class="fa fa-clock"></i> Posted On : {{ date('j F, Y', strtotime($blogShow->created_at)) }}</a></span>
                                 <span class="me-3"><a href="{{ route('property.single.blog',$blogShow->slug)}}"><i class="fa fa-user"></i> Admin</a></span>
                                 <span><a href="#"><i class="fa fa-comments"></i> 50</a></span>
                              </div>
                           </div>
                        </div>
                     </div>
                      <p class="mb-3">
                        {!! $blogShow->description !!}
                      </p>
                   </div>
                   {{-- <div class="blog-share d-flex justify-content-between align-items-center mb-4 bg-lgrey border rounded">
                      <div class="blog-share-tag">
                         <ul class="inline">
                            <li><strong>Posted In:</strong></li>
                            <li><a href="#">Fashion,</a></li>
                            <li><a href="#">Beauty,</a></li>
                            <li><a href="#">Vacation,</a></li>
                            <li><a href="#">Travel,</a></li>
                            <li><a href="#">News</a></li>
                         </ul>
                      </div>
                      <div class="header-social">
                         <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                         </ul>
                      </div>
                   </div> --}}
                   {{-- <div class="blog-author mb-4 bg-grey border rounded">
                      <div class="blog-author-item">
                         <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                               <div class="blog-thumb text-center position-relative">
                                  <img src="images/reviewer/1.jpg" alt>
                               </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                               <h3 class="title pink"><a href="#">About Author <span>Graphic Designer</span></a></h3>
                               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceler neque in euismod. Nam vitae urnasodales neque in faucibus.</p>
                            </div>
                         </div>
                      </div>
                   </div> --}}
                   {{-- <div class="blog-next mb-4 d-sm-flex align-items-center rounded">
                      <a href="#" class="d-block bg-theme">
                         <div class="prev ps-4">
                            <i class="fa fa-arrow-left white"></i>
                            <p class="m-0 white">Previous Post</p>
                            <p class="m-0 white">The bedding was hardly able</p>
                         </div>
                      </a>
                      <a href="#" class="d-block bg-grey">
                         <div class="next pr-4 text-right">
                            <i class="fa fa-arrow-right"></i>
                            <p class="m-0">Previous Post</p>
                            <p class="m-0">The bedding was hardly able</p>
                         </div>
                      </a>
                   </div>
                   <div class="single-comments single-box mb-4">
                      <h4 class="mb-4">Showing 16 verified guest comments</h4>
                      <div class="comment-box">
                         <div class="comment-image mt-2">
                            <img src="images/reviewer/1.jpg" alt="image">
                         </div>
                         <div class="comment-content rounded">
                            <h4 class="mb-1 Soldman Kell">Soldman Kell</h4>
                            <p class="comment-date">April 25, 2019 at 10:46 am</p>
                            <div class="comment-rate">
                               <div class="rating">
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                               </div>
                               <span class="comment-title">"The worst hotel ever"</span>
                            </div>
                            <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                            <div class="comment-like">
                               <div class="like-title float-left">
                                  <a href="#" class="nir-btn mr-2">Reply</a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="comment-box">
                         <div class="comment-image mt-2">
                            <img src="images/reviewer/2.jpg" alt="image">
                         </div>
                         <div class="comment-content rounded">
                            <h4 class="mb-1">Burson Lesson</h4>
                            <p class="comment-date">April 25, 2019 at 10:46 am</p>
                            <div class="comment-rate">
                               <div class="rating">
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                                  <span class="fa fa-star checked"></span>
                               </div>
                               <span class="comment-title">"Was too noisy and not suitable for business meetings"</span>
                            </div>
                            <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                            <div class="comment-like">
                               <div class="like-title float-left">
                                  <a href="#" class="nir-btn">Reply</a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div> --}}
                   {{-- <div class="single-add-review">
                      <h4 class>Write a Review</h4>
                      <form>
                         <div class="row">
                            <div class="col-lg-6">
                               <div class="form-group mb-2">
                                  <input type="text" placeholder="Name">
                               </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="form-group mb-2">
                                  <input type="email" placeholder="Email">
                               </div>
                            </div>
                            <div class="col-lg-12 mb-1">
                               <div class="form-group">
                                  <textarea>Comment</textarea>
                               </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="form-btn">
                                  <a href="#" class="nir-btn">Submit Review</a>
                               </div>
                            </div>
                         </div>
                      </form>
                   </div> --}}
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-12">
             <div class="sidebar-sticky">
                <div class="list-sidebar">
                   {{-- <div class="author-news mb-4 box-shadow border-all p-5 text-center rounded">
                      <div class="author-news-content">
                         <div class="author-thumb mb-1">
                            <img src="images/team/img2.jpg" alt="author">
                         </div>
                         <div class="author-content">
                            <h3 class="title mb-1"><a href="#">Relson Dulux</a></h3>
                            <p class="mb-2">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
                            <div class="header-social">
                               <ul>
                                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div> --}}
                   <div class="sidebar-item mb-4">
                      <h4 class>Popular Category</h4>
                      <ul class="sidebar-category">
                        @foreach($blogCategogry as $category)
                            <li><a href="#">{{ $category->name ?? 'Null'}}</a></li>
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
