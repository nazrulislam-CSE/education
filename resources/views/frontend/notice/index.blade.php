@extends('layouts.frontend')
@section('content-frontend')
<div id="tg-innerbanner" class="tg-innerbanner">
    <div class="tg-themeparallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ asset('frontend/assets/images/parallax/bgparallax-20.jpg ') }}">
       <div class="tg-onlinecourseparallax tg-haslayout">
          <div class="container">
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
                   <div class="tg-innerbannercontent">
                      <div class="tg-pagetitle">
                         <h1>Notice</h1>
                      </div>
                      <div class="tg-description">
                         <p>{{ $notice->title ?? 'Null'}}</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    {{-- <div class="tg-breadcrumbspagename">
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ol class="tg-breadcrumb">
                   <li><a href="javascript:void(0);">Home</a></li>
                   <li><a href="javascript:void(0);">pages</a></li>
                   <li class="tg-active">Shopping Cart </li>
                </ol>
                <span class="tg-pagename">Cart Details</span>
             </div>
          </div>
       </div>
    </div> --}}
 </div>

 <main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
    <div class="container">
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-md-12">
             <div id="tg-content" class="tg-content">
                <div class="tg-shoppingcart">
                   <h2>Notice</h2>
                   <div class="table-responsive tg-tableshoppingcart">
                      <table>
                         <thead>
                            <tr>
                               <th>Notic Published</th>
                               <th>Notice Title</th>
                               <th>PDF Download</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                                <td class="1">
                                    {{ $notice->created_at }}
                                </td>
                                <td class="5">{{ $notice->title ?? 'Null'}}</td>
                               <td class="1">
                                    {{-- {{ asset('public/upload/custom-images/'.$property->file) }} --}}
                                    {{-- PDF File:  <a href="{{ asset($property->file) }}" class="btn btn-success">PDF Download</a> --}}
                                    <a href="{{ asset('upload/pdf/'.$notice->pdf) }}"   title="Empty Notice File!">
                                        <img src="{{ asset('frontend/assets/images/pdf.jpg')}}" width="50">Download
                                    {{-- <a href="{{ $notice->pdf }}"   title="Empty Notice File!">
                                        <img src="{{ asset('frontend/assets/images/pdf.jpg')}}" width="50">Download
                                    </a> --}}
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>

                </div>
             </div>
          </div>
          {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-md-12">
            <div id="tg-content" class="tg-content">
               <div class="tg-shoppingcart">
                  <h2>PDF View</h2>
                  <div class="table-responsive tg-tableshoppingcart">
                    <embed src="{{ asset('upload/pdf/'.$notice->pdf) }}"  width="100%" height="600px">
                  </div>
               </div>
            </div>
         </div> --}}
       </div>
    </div>
 </main>
@endsection
