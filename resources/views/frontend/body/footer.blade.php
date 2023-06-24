<footer id="tg-footer" class="tg-footer tg-footervone tg-haslayout">
   <!--  <div class="tg-calltoaction">
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-calltoactiontextbox">
                   <h2>Like to Become <span>an Instructor?</span></h2>
                   <div class="tg-description">
                      <p>The mate was a mighty sailing man the skipper brave and sure five passengers set sail that day for a three hour</p>
                   </div>
                   <a class="tg-btn" href="javascript:void(0);">Join with Us</a>
                </div>
             </div>
          </div>
       </div>
    </div> -->
    <div class="tg-footercolumns">
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="tg-footercolumn">
                   <strong class="tg-logo"><a href="javascript:void(0);"><img src="{{ asset(get_setting('footer_logo')->value ?? 'frontend/assets/images/logos/logo-02.png')}}" alt="image description"></a></strong>
                   <div class="tg-description">
                      <!-- <p>That started my way to where the air is sweet can you tell me how I get</p> -->
                   </div>
                   <ul class="tg-contactinfo tg-contactinfovtwo">
                      <li>
                         <span class="tg-contactinfoicon"><i class="fa fa-phone"></i></span>
                         <span>{{ get_setting('phone')->value ?? 'null'}}</span>

                      <li>
                         <span class="tg-contactinfoicon"><i class="fa fa-envelope-o"></i></span>
                         <span>
                           <a href="mailto:{{ get_setting('email')->value ?? 'null' }}">{{ get_setting('email')->value ?? 'null' }}</a>
                        </span>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="tg-footercolumn tg-quicksupport">
                   <div class="tg-footerwidgettitle">
                      <h3>Popular Pages</h3>
                   </div>
                   <div class="tg-widgetcontent">
                      <ul>
                        @foreach(get_pages_both_footer() as $page)
                         <li>
                           <a href="{{ route('page.about', $page->slug) }}">{{ $page->name ?? 'Null' }}</a>
                        </li>
                        @endforeach
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="tg-footercolumn tg-instagram">
                   <div class="tg-footerwidgettitle">
                      <h3>Popular Photos</h3>
                   </div>
                   @php
                       $services = App\Models\Service::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
                   @endphp
                   <div class="tg-widgetcontent">
                      <ul>
                        @foreach ($services as $service )
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ asset($service->icon ?? 'frontend/assets/images/No-Image.jpg')}}" alt="image description">
                                </a>
                            </li>
                        @endforeach
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="tg-footercolumn tg-subscribe">
                   <div class="tg-footerwidgettitle">
                      <h3>Subscribe</h3>
                   </div>
                   <div class="tg-widgetcontent">
                      <div class="tg-description">
                         <p>Above the law sunny days sweeping the clouds away fateful trip where</p>
                      </div>
                      <form class="tg-formtheme tg-formnewsletter">
                         <fieldset>
                            <input type="email" name="email" class="form-control" placeholder="E-mail Address">
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                         </fieldset>
                         <p><span>*</span> Your informations are safe with Us</p>
                      </form>
                      <ul class="tg-socialicons">
                        <li>
                           <a href="{{ get_setting('facebook_url')->value ?? 'null' }}"><i class="fa fa-facebook"></i></a></li>
                        <li>
                           <a href="{{ get_setting('linkedin_url')->value ?? 'null' }}"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                           <a href="{{ get_setting('twitter_url')->value ?? 'null' }}"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="{{ get_setting('instagram_url')->value ?? 'null' }}"><i class="fa fa-instagram"></i></a>
                        </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="tg-footerbar">
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="tg-copyright">{{ get_setting('copy_right')->value ?? 'null'}} School. All rights reserved.</span>
                <nav class="tg-footernav">
                   <ul>
                     <li>
                        <a target="_blank" href="https://softhostit.com/">Developed By Soft Host It</a>
                     </li>
                   </ul>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </footer>
