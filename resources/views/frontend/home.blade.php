@extends('layouts.frontend')
@section('content-frontend')
<!--************ Home Slider One Start *********-->
<style type="text/css">
   .slider_banner {
    padding-top:5px;
    padding-bottom: 10px;
    border-top: 1px solid #ffc722;
 }
 .notice_board{
    padding-top:5px;
    padding-bottom: 15px;
 }
  #checkout_list {
    background-color: #fff;
    z-index: 1;
    max-height: 400px;
    overflow-y: auto;
   }
   .tdvad {
    width: 97%;
    padding: 2px;
    border-bottom: 2px solid #fff;
    padding: 13px 2px;
}
   .btn-warning {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
 }
 .btn.btn-primary {
    background: #45aed6;
    border-color: #2a95be;
}
</style>
<!-- start slider section  -->
<section class="tg-haslayout tg-sectionspace slider_banner">
   <div class="container">
      <div class="row">
         <div class="tg-blogpost">
            @php
               $banners = App\Models\Banner::where('status', 1)->latest()->get();
            @endphp
            @foreach($banners->take(1) as $banner)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-top:20px;">
               <div class="card bg-primary text-center" style="height: 330px;">
                  <div class="card-header bg-danger" style="padding:10px;">
                     <h4 class="text-center" style="margin-top: 20px!important;">
                        <img src="" width="30">{{ $banner->title ?? 'Null'}}</h4>
                  </div>
                  <div class="card-body" style="padding-top:5px;">
                     <a href="#">
                        <img src="{{ asset($banner->image ?? 'frontend/assets/images/No-Image.jpg')}}" width="100" style="padding:2px">
                     </a>
                  </div>
                  <div class="card-footer">
                     <h5 style="text-align:center">
                        <a href="#"></a>

                        <a href="#" style="color:#fff">{{ $banner->name ?? 'Null'}}</a>
                     </h5>
                     <h5 style="color:#fff"> {{ $banner->designation ?? 'Null'}}</h5>
                     <a href="#" data-toggle="modal" data-target="#myModal">  আরও পড়ুন ...</a>
                  </div>
               </div>
            </div>
            @endforeach
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6" style="margin-top:20px;">
               @php
                  $sliders = App\Models\Slider::where('status', 1)->latest()->get();
               @endphp
               <div class="card" style="height: 330px;">
                  <div class="card-body">
                        <div id="tg-testimonialslider" class="tg-testimonialslider tg-rounddots owl-carousel">
                           @foreach($sliders->take(3) as $slider)
                           <div class="item tg-testimonial">
                              <img src="{{ asset($slider->slider_img ?? 'frontend/assets/images/No-Image.jpg')}}" alt="image description" style="height:330px;">
                              <div class="">
                                 <h3>.</h3>
                                 <span>.</span>
                              </div>
                           </div>
                           @endforeach
                        </div>
                  </div>
               </div>
            </div>
            @php
               $banners = App\Models\Banner::where('status', 1)->latest()->get();
            @endphp
            @foreach($banners->skip(1)->take(1) as $banner)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-top:20px;">
               <div class="card bg-primary text-center" style="height: 330px;">
                  <div class="card-header bg-danger" style="padding:10px;">
                     <h4 class="text-center" style="margin-top: 20px!important;">
                        <img src="" width="30"> {{ $banner->title ?? 'Null'}} </h4>
                  </div>
                  <div class="card-body" style="padding-top:5px;">
                     <a href="#">
                        <img src="{{ asset($banner->image ?? 'frontend/assets/images/No-Image.jpg')}}" width="100" style="padding:2px">
                     </a>
                  </div>
                  <div class="card-footer">
                     <h5 style="text-align:center">
                        <a href="#"></a>

                        <a href="#" style="color:#fff">{{ $banner->name ?? 'Null'}}</a>
                     </h5>
                     <h5 style="color:#fff">  {{ $banner->designation ?? 'Null'}}</h5>
                     <a href="#" data-toggle="modal" data-target="#myModal">  আরও পড়ুন ...</a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</section>
<!-- end slider section  -->

<!-- start notice board section -->
<section class="tg-haslayout tg-sectionspace notice_board">
   <div class="container">
      <div class="row">
         <div class="tg-blogpost">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-top:20px;">
               <div class="card bg-light text-center" style="height: 330px;">
                  <div class="card-header" style="padding:10px; background: rgb(238,174,202);background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
                     <h4 class="text-center" style="margin-top: 20px!important; color:#fff;">
                        <img src="https://sylgovaliamadrasa.edu.bd/images/globe.png" width="30"> মাদ্রাসা সম্পর্কিত তথ্য
                     </h4>
                  </div>
                  <div class="card-body" style="padding-top:5px;">
                     <div class="tg-widgetcontent tg-widgetcontentwithcount">
                        @php
                           $madrasha = App\Models\Madrasha::where('status', 1)->limit(10)->latest()->get();
                        @endphp
                        <ul>
                           @foreach($madrasha as $item)
                           <li>
                              <a href="https://sylgovaliamadrasa.edu.bd/index.php/our_teachers">
                                 <img src="{{ asset($item->icon ?? 'frontend/assets/images/No-Image.jpg')}}" width="18">
                                 {{ $item->name ?? 'Null'}}
                              </a>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6" style="margin-top:20px;">
               <div class="card" style="height: 330px;">
                  <div class="card-header" style="padding:17px; background: rgb(63,94,251);background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(70,252,137,1) 100%); ">
                     <h3 style="color:#fff;border-radius:3px; text-align:center">
                        <img src="https://sylgovaliamadrasa.edu.bd/images/notice.png" width="30">নোটিশ বোর্ড
                     </h3>
                  </div>

                  @php
                      $notice_list = App\Models\Notice::where('status', 1)->latest()->get();
                  @endphp

                  <div style="width:100%; height:45px;  padding:4px 0px 4px 0px; background: linear-gradient(90deg, rgb(224 192 245) 0%, rgba(29,146,253,1) 50%, rgb(252 77 69) 100%); font-size:20px; color:brown; font-weight:bold">
                    <marquee height="30" style="padding-top:5px">
                        @foreach ( $notice_list as $item )
                            <a style="text-decoration:none; color:white" href="{{ route('single.notice',$item->slug) }}">{{ $item->title ?? 'Null'}}</a> ||
                        @endforeach
                    </marquee>
                  </div>

                @php
                    $notices = App\Models\Notice::where('status',1)->latest()->get();
                @endphp

                  <div class="card-body">
                     <div style="text-align:justify; font-size:15px; color:#000; padding:10px; background:#b0cff5;border-radius:3px" id="checkout_list">
                        <table class="table table-hover table-bordered" style="width:100%; margin:auto;">
                           <tbody>
                            @foreach ($notices->take(10) as $notice)
                                <tr>
                                    <td style="width:60px; color:brown;">{{ $notice->created_at }}</td>
                                    <td style="width:430px;"><a style="text-decoration:none; color:#01579B" href="{{ route('single.notice',$notice->slug) }}">{{ $notice->title }}</a></td>
                                    <td style="width:44px; text-align:center; color:#004D40;"><img src="https://sylgovaliamadrasa.edu.bd/images/viewTop.png" width="20">{{ $notice->views ?? '0' }}</td>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                       </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-top:20px;">
               <div class="card text-center" style="height: 230px; background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(29,146,253,1) 50%, rgba(252,176,69,1) 100%);">
                  <div class="card-danger" style="padding:10px;">
                     <h4 class="text-center" style="margin-top: 20px!important; color:white;">
                        <img src="https://sylgovaliamadrasa.edu.bd/images/admission1.png" width="30"> অনলাইন ভর্তি
                     </h4>
                  </div>
                  <div class="card-body" style="padding-top:5px;">
                     <div class="visitorStatAdm">
                          <table style="width:100%">
                              <tbody><tr>
                                  <td class="tdvad">
                                    <a href="/admission" class="btn btn-primary"> ভর্তির আবেদন </a></td>
                              </tr>
                              <tr>
                                  <td class="tdvad"><a href="https://sylgovaliamadrasa.edu.bd/index.php/pages/admission_info" class="btn btn-warning">
                                        ভর্তির তথ্য</a></td>
                              </tr>
                          </tbody></table>
                      </div>
                  </div>
               </div>
               <div class="card text-center" style="height: 148px; background: radial-gradient(circle, rgb(229 58 19) 0%, rgb(11 149 171) 100%); margin-top: 20px;">
                  <div class="" style="padding:10px; background: ;">
                     <h4 class="text-center" style="margin-top: 20px!important; color:white;">
                        <img src="https://sylgovaliamadrasa.edu.bd/images/admission1.png" width="30"> অভিযোগ বক্স
                     </h4>
                  </div>
                  <div class="card-body" style="padding-top:5px;">
                     <div class="visitorStatAdm">
                          <table style="width:100%">
                              <tbody><tr>
                                     <td class="tdvad">
                                       <a href="/admission" class="btn btn-primary"> অভিযোগ করুন </a></td>
                                 </tr>
                             </tbody>
                           </table>
                      </div>
                  </div>
               </div>
               <div class="card text-center" style="height: 148px; background: radial-gradient(circle, rgb(44 78 253) 0%, rgb(193 26 118) 100%); margin-top: 20px;">
                  <div class="" style="padding:10px; background: ;">
                     <h4 class="text-center" style="margin-top: 20px!important; color:white;">
                        <img src="https://sylgovaliamadrasa.edu.bd/images/admission1.png" width="30"> হট লাইন
                     </h4>
                  </div>
                  <div class="card-body" style="padding-top:5px;">
                     <div class="visitorStatAdm">
                          <table style="width:100%">
                              <tbody><tr>
                                     <td class="tdvad">
                                       <a href="/admission" class="btn btn-primary"> 0781424240 </a></td>
                                 </tr>
                             </tbody>
                           </table>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end notice board section -->

<main id="tg-main" class="tg-main tg-haslayout">
   <!--************* Features Start *************-->
   <section class="tg-haslayout tg-sectionspace">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
               <div class="tg-sectionhead">
                  <h2><span class="tg-themecolor">অনার্স বিভাগসমূহ</span></h2>
                  <div class="tg-description">
                     <p>Were gonna pay a call on the addams family love exciting and new come aboard were expecting you love life's sweetest reward Let it flow it floats to right side.</p>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div id="tg-gridslider" class="tg-gridslider tg-courses tg-coursesvone owl-carousel tg-slidernavstyleOne">
                @php
                    $services = DB::table('services')->where('status',1)->get();
                @endphp
                @foreach ($services as $service)
                    <div class="item">
                        <div class="tg-themepost tg-course">
                            <figure class="tg-themepostimg">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset($service->icon ?? 'frontend/assets/images/No-Image.jpg')}}" alt="image description"></a>
                                <figcaption>
                                    <span class="tg-themeposticon"></span>
                                    <div class="tg-themeposttitle">
                                        <h3><a href="javascript:void(0);"><span>{{$service->title ?? 'Null'}}
                                    </span></a></h3>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="tg-themepostcontent">
                                <div class="tg-description">
                                    <p>{!!$service->description ?? 'Null'!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--************** Features End ************-->

   <!--********************* Statistics Start ********************-->
   <section class="tg-sectionspace tg-bgthemecolor tg-statisticspattern tg-haslayout">
      <div class="container">
         <div class="row">
            <div class="tg-statistics">
                @php
                    $counter = App\Models\Counter::where('status',1)->get();
                @endphp

                @foreach ($counter as $item)
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="tg-statistic">
                        <span class="tg-statisticicon">
                            <!--<i class="fa  fa-bullhorn"></i>-->
                            {{-- <img src="{{ asset('frontend/assets/images/icons/icon-18.png ')}}" alt="image description"> --}}
                        </span>
                        <div class="tg-titlecounter">
                            <h4>{{ $item->title ?? 'Null'}}</h4>
                            <h3 data-from="0" data-to="{{ $item->counter_no ?? '0'}}" data-speed="{{ $item->counter_no ?? '0'}}" data-refresh-interval="50">{{ $item->counter_no ?? '0'}}</h3>
                        </div>
                        </div>
                </div>
                @endforeach
            </div>
         </div>
      </div>
   </section>
   <!--******************** Statistics End ******************-->

   <!--****************** Gallery Portfolio Start *********************-->
   <section class="tg-haslayout tg-sectionspace">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="tg-sectionhead text-center">
                  <h2><span class="tg-themecolor">মাদ্রাসা সম্পর্কিত তথ্য</span></h2>
                  <div class="tg-description">
                     <p>The movie star the professor and mary ann here on gilligans isle come and knock on our door we have been waiting for you where the kisses are hers and hers and his young loner on a crusade to champion the cause of the innocent people living around the richest world</p>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="tg-Portfolio">
                  <div class="tg-themetabs">
                    @php
                        $notice_menus = App\Models\NoticeMenu::where('status', 1)->get();
                    @endphp
                     <ul class="tg-navtabs" role="tablist">
                        @foreach($notice_menus as $count => $menu)
                            <li role="presentation"  @if($count == 0) class="active" @endif class="">
                                <a class="text-center" href="#tab-{{ $menu->id }}" aria-controls="gallery" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="{{ asset($menu->icon) }}"><br>
                                    {{ $menu->name ?? 'Null'}}
                                </a>
                            </li>
                        @endforeach
                     </ul>
                     <div class="tg-tabcontent tab-content" id="myTabContent">

                        @foreach($notice_menus as $count => $menu)
                            @php
                                $notices = App\Models\Notice::where('notice_menus_id', $menu->id)->where('status', 1)->get();
                            @endphp

                            <div role="tabpanel" @if($count == 0) class="tab-pane active" @endif  class="tab-pane" id="tab-{{ $menu->id }}">
                                <div class="tg-description">
                                    <div class="tg-masonrygrid photography" style="width:100%;">
                                        <table class="table table-bordered table-striped table-responsive" width="100%">
                                            <thead>
                                            <tr>
                                                <th scope="col">Sl</th>
                                                <th scope="col">Date & Time</th>
                                                <th scope="col">Notice</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($notices as $key => $notice)
                                                <tr>
                                                    <th scope="row">{{ $key+1}}</th>
                                                    <td>{{ $notice->created_at }}</td>
                                                    <td>
                                                        <a style="text-decoration:none; color:#004d40; font-size:15px" href="{{ route('single.notice',$notice->slug) }}">{{ $notice->title }}
                                                        </a>
                                                    </td>
                                                </tr>
                                                @empty
                                                    <tr>
                                                        <th scope="row" colspan="1"></th>
                                                        <td>No Notice Found</td>
                                                        <th scope="row" colspan="1"></th>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
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
   </section>
   <!--************ Gallery Portfolio End  ********-->

   <!--************ Brands Start  *************-->
  <!--  <section class="tg-themeparallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ asset('frontend/assets/images/parallax/bgparallax-03.jpg ')}}">
      <div class="tg-sectionspace tg-brandsparallax tg-haslayout">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="tg-sectionhead text-center">
                     <h2>Classes from <span class="tg-whitecolor">The experts</span></h2>
                     <div class="tg-description">
                        <p>The movie star the professor and mary ann here on gilligans isle come and knock on our door we have been waiting for you where the kisses are hers and hers and his young loner on a crusade to champion the cause of the innocent people living around the richest world</p>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div id="tg-brandsslider" class="tg-brandsslider tg-brands owl-carousel">
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-01.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-02.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-03.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-04.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-05.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-06.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-01.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-02.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-03.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-04.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-05.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-06.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-01.png ')}}" alt="image description"></a></figure>
                     <figure class="item"><a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/brands/1/img-02.png ')}}" alt="image description"></a></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--************* Brands End **************-->

   <!--************* Events Start **************-->
 <!--   <section class="tg-haslayout tg-sectionspace">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
               <div class="tg-sectionhead">
                  <h2>Upcoming <span class="tg-themecolor">Events</span></h2>
                  <div class="tg-description">
                     <p>Were gonna pay a call on the addams family love exciting and new come aboard were expecting you love life's sweetest reward Let it flow it floats to right side.</p>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="tg-themeposts tg-eventposts">
                  <div id="tg-eventpostsslider" class="tg-eventpostsslider tg-slidernavstyleOne owl-carousel">
                     <div class="item">
                        <div class="tg-themepost tg-eventpost tg-eventpostfull">
                           <figure class="tg-themepostimg">
                              <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/events/1/img-01.png ')}}" alt="image description"></a>
                              <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                           </figure>
                           <div class="tg-themepostcontent">
                              <div class="tg-themeposttitle">
                                 <h3><a href="javascript:void(0);">3 Days free workshop on Stitching Classes for Fresher Candidates 2017</a></h3>
                              </div>
                              <div class="tg-description">
                                 <p>The first mate and his skipper too will do their very best to make the others comfortable in their tropic island nest. Believe it or not I'm on air I never thought I could feel so free flying away.</p>
                              </div>
                              <div class="tg-themepostfoot">
                                 <ul class="tg-eventpostinfo">
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-map-marker"></i></span>
                                       <strong>Venue:</strong>
                                       <em>South Ozone, NY 11420</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-clock-o"></i></span>
                                       <strong>Time:</strong>
                                       <em>09:00am - 11:00am</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-user"></i></span>
                                       <strong>Host:</strong>
                                       <em>Dr. Anbazhahan, PHD.,</em>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="tg-themepost tg-eventpost tg-eventpostfull">
                           <figure class="tg-themepostimg">
                              <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/events/1/img-02.png ')}}" alt="image description"></a>
                              <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                           </figure>
                           <div class="tg-themepostcontent">
                              <div class="tg-themeposttitle">
                                 <h3><a href="javascript:void(0);">3 Days free workshop on Stitching Classes for Fresher Candidates 2017</a></h3>
                              </div>
                              <div class="tg-description">
                                 <p>The first mate and his skipper too will do their very best to make the others comfortable in their tropic island nest. Believe it or not I'm on air I never thought I could feel so free flying away.</p>
                              </div>
                              <div class="tg-themepostfoot">
                                 <ul class="tg-eventpostinfo">
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-map-marker"></i></span>
                                       <strong>Venue:</strong>
                                       <em>South Ozone, NY 11420</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-clock-o"></i></span>
                                       <strong>Time:</strong>
                                       <em>09:00am - 11:00am</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-user"></i></span>
                                       <strong>Host:</strong>
                                       <em>Dr. Anbazhahan, PHD.,</em>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="tg-themepost tg-eventpost tg-eventpostfull">
                           <figure class="tg-themepostimg">
                              <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/events/1/img-01.png ')}}" alt="image description"></a>
                              <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                           </figure>
                           <div class="tg-themepostcontent">
                              <div class="tg-themeposttitle">
                                 <h3><a href="javascript:void(0);">3 Days free workshop on Stitching Classes for Fresher Candidates 2017</a></h3>
                              </div>
                              <div class="tg-description">
                                 <p>The first mate and his skipper too will do their very best to make the others comfortable in their tropic island nest. Believe it or not I'm on air I never thought I could feel so free flying away.</p>
                              </div>
                              <div class="tg-themepostfoot">
                                 <ul class="tg-eventpostinfo">
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-map-marker"></i></span>
                                       <strong>Venue:</strong>
                                       <em>South Ozone, NY 11420</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-clock-o"></i></span>
                                       <strong>Time:</strong>
                                       <em>09:00am - 11:00am</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-user"></i></span>
                                       <strong>Host:</strong>
                                       <em>Dr. Anbazhahan, PHD.,</em>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="tg-themepost tg-eventpost tg-eventpostfull">
                           <figure class="tg-themepostimg">
                              <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/events/1/img-02.png ')}}" alt="image description"></a>
                              <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                           </figure>
                           <div class="tg-themepostcontent">
                              <div class="tg-themeposttitle">
                                 <h3><a href="javascript:void(0);">3 Days free workshop on Stitching Classes for Fresher Candidates 2017</a></h3>
                              </div>
                              <div class="tg-description">
                                 <p>The first mate and his skipper too will do their very best to make the others comfortable in their tropic island nest. Believe it or not I'm on air I never thought I could feel so free flying away.</p>
                              </div>
                              <div class="tg-themepostfoot">
                                 <ul class="tg-eventpostinfo">
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-map-marker"></i></span>
                                       <strong>Venue:</strong>
                                       <em>South Ozone, NY 11420</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-clock-o"></i></span>
                                       <strong>Time:</strong>
                                       <em>09:00am - 11:00am</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-user"></i></span>
                                       <strong>Host:</strong>
                                       <em>Dr. Anbazhahan, PHD.,</em>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="tg-themepost tg-eventpost tg-eventpostfull">
                           <figure class="tg-themepostimg">
                              <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/events/1/img-01.png ')}}" alt="image description"></a>
                              <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                           </figure>
                           <div class="tg-themepostcontent">
                              <div class="tg-themeposttitle">
                                 <h3><a href="javascript:void(0);">3 Days free workshop on Stitching Classes for Fresher Candidates 2017</a></h3>
                              </div>
                              <div class="tg-description">
                                 <p>The first mate and his skipper too will do their very best to make the others comfortable in their tropic island nest. Believe it or not I'm on air I never thought I could feel so free flying away.</p>
                              </div>
                              <div class="tg-themepostfoot">
                                 <ul class="tg-eventpostinfo">
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-map-marker"></i></span>
                                       <strong>Venue:</strong>
                                       <em>South Ozone, NY 11420</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-clock-o"></i></span>
                                       <strong>Time:</strong>
                                       <em>09:00am - 11:00am</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-user"></i></span>
                                       <strong>Host:</strong>
                                       <em>Dr. Anbazhahan, PHD.,</em>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="tg-themepost tg-eventpost tg-eventpostfull">
                           <figure class="tg-themepostimg">
                              <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/events/1/img-02.png ')}}" alt="image description"></a>
                              <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                           </figure>
                           <div class="tg-themepostcontent">
                              <div class="tg-themeposttitle">
                                 <h3><a href="javascript:void(0);">3 Days free workshop on Stitching Classes for Fresher Candidates 2017</a></h3>
                              </div>
                              <div class="tg-description">
                                 <p>The first mate and his skipper too will do their very best to make the others comfortable in their tropic island nest. Believe it or not I'm on air I never thought I could feel so free flying away.</p>
                              </div>
                              <div class="tg-themepostfoot">
                                 <ul class="tg-eventpostinfo">
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-map-marker"></i></span>
                                       <strong>Venue:</strong>
                                       <em>South Ozone, NY 11420</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-clock-o"></i></span>
                                       <strong>Time:</strong>
                                       <em>09:00am - 11:00am</em>
                                    </li>
                                    <li>
                                       <span class="tg-eventpostinfoicon"><i class="fa fa-user"></i></span>
                                       <strong>Host:</strong>
                                       <em>Dr. Anbazhahan, PHD.,</em>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="tg-btn" href="javascript:void(0);">View More</a>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--************** Events End **************-->
   <!--*********** Testimonials Start **************-->
  <!--  <div class="container-fluid">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
               <div class="tg-themeparallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ asset('frontend/assets/images/testimonials/img-01.jpg ')}}">
                  <div class="tg-feedbackimg"></div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
               <div class="tg-sectionspace tg-testimonialsbg tg-haslayout">
                  <div class="tg-testimonials">
                     <div class="tg-sectionhead tg-sectionheadvtwo">
                        <strong>Testimonials</strong>
                        <h2>encouraging <span class="tg-themecolor">Feedback’s</span></h2>
                     </div>
                     <div id="tg-testimonialslider" class="tg-testimonialslider tg-rounddots owl-carousel">
                        <div class="item tg-testimonial">
                           <blockquote><q>Join us here each week my friends you are sure to get a smile from seven stranded castaways here on <span>Gilligans Isle</span> now were up in the big leagues getting our turn at bat. And if you threw a party invited everyone you knew you would see the <span>BIGGEST GIFT</span> would be me.</q></blockquote>
                           <div class="tg-testimonialinfo">
                              <h3>Mathew Madasamy</h3>
                              <span>Rockwell, Texas</span>
                           </div>
                        </div>
                        <div class="item tg-testimonial">
                           <blockquote><q>Join us here each week my friends you are sure to get a smile from seven stranded castaways here on <span>Gilligans Isle</span> now were up in the big leagues getting our turn at bat. And if you threw a party invited everyone you knew you would see the <span>BIGGEST GIFT</span> would be me.</q></blockquote>
                           <div class="tg-testimonialinfo">
                              <h3>Mathew Madasamy</h3>
                              <span>Rockwell, Texas</span>
                           </div>
                        </div>
                        <div class="item tg-testimonial">
                           <blockquote><q>Join us here each week my friends you are sure to get a smile from seven stranded castaways here on <span>Gilligans Isle</span> now were up in the big leagues getting our turn at bat. And if you threw a party invited everyone you knew you would see the <span>BIGGEST GIFT</span> would be me.</q></blockquote>
                           <div class="tg-testimonialinfo">
                              <h3>Mathew Madasamy</h3>
                              <span>Rockwell, Texas</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!--***************** Testimonials End ****************-->
   <!--*************** News and Article Start ********************-->
  <!--  <section class="tg-haslayout tg-sectionspace">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="tg-sectionhead text-center">
                  <h2>Latest <span class="tg-themecolor">News Updates</span></h2>
                  <div class="tg-description">
                     <p>The movie star the professor and mary ann here on gilligans isle come and knock on our door we have been waiting for you where the kisses are hers and hers and his young loner on a crusade to champion the cause of the innocent people living around the richest world</p>
                  </div>
               </div>
            </div>
            <div class="tg-blogpost">
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <article class="tg-themepost tg-post">
                     <figure class="tg-themepostimg">
                        <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/blogpost/img-01.jpg ')}}" alt="image description"></a>
                        <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                        <figcaption>
                           <ul class="tg-themepostmetadata">
                              <li>
                                 <i class="fa fa-user"></i>
                                 <em><a href="javascript:void(0);">By Admin</a></em>
                              </li>
                              <li>
                                 <i class="fa fa-commenting"></i>
                                 <em><a href="javascript:void(0);">Comments 16</a></em>
                              </li>
                              <li>
                                 <i class="fa fa-heart-o"></i>
                                 <em><a href="javascript:void(0);">Favorites 20</a></em>
                              </li>
                           </ul>
                        </figcaption>
                     </figure>
                     <div class="tg-themepostcontent">
                        <div class="tg-themeposttitle">
                           <h3><a href="javascript:void(0);">Michael knight a young loner on a crusade to champion cause of the innocent</a></h3>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <article class="tg-themepost tg-post">
                     <figure class="tg-themepostimg">
                        <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/blogpost/img-02.jpg ')}}" alt="image description"></a>
                        <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                        <figcaption>
                           <ul class="tg-themepostmetadata">
                              <li>
                                 <i class="fa fa-user"></i>
                                 <em><a href="javascript:void(0);">By Admin</a></em>
                              </li>
                              <li>
                                 <i class="fa fa-commenting"></i>
                                 <em><a href="javascript:void(0);">Comments 16</a></em>
                              </li>
                              <li>
                                 <i class="fa fa-heart-o"></i>
                                 <em><a href="javascript:void(0);">Favorites 20</a></em>
                              </li>
                           </ul>
                        </figcaption>
                     </figure>
                     <div class="tg-themepostcontent">
                        <div class="tg-themeposttitle">
                           <h3><a href="javascript:void(0);">Its a neighborly day in this beautywood a neighborly day for a beauty</a></h3>
                        </div>
                     </div>
                  </article>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <article class="tg-themepost tg-post">
                     <figure class="tg-themepostimg">
                        <a href="javascript:void(0);"><img src="{{ asset('frontend/assets/images/blogpost/img-03.jpg ')}}" alt="image description"></a>
                        <time class="tg-date" datetime="2017-02-02"><span>10</span> nov</time>
                        <figcaption>
                           <ul class="tg-themepostmetadata">
                              <li>
                                 <i class="fa fa-user"></i>
                                 <em><a href="javascript:void(0);">By Admin</a></em>
                              </li>
                              <li>
                                 <i class="fa fa-commenting"></i>
                                 <em><a href="javascript:void(0);">Comments 16</a></em>
                              </li>
                              <li>
                                 <i class="fa fa-heart-o"></i>
                                 <em><a href="javascript:void(0);">Favorites 20</a></em>
                              </li>
                           </ul>
                        </figcaption>
                     </figure>
                     <div class="tg-themepostcontent">
                        <div class="tg-themeposttitle">
                           <h3><a href="javascript:void(0);">Knight a young loner on a crusade to champion the cause of the innocent</a></h3>
                        </div>
                     </div>
                  </article>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--***************** News and Article End ****************-->
</main>
@endsection
