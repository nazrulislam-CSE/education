<header id="tg-header" class="tg-header tg-headervone tg-haslayout">
 <div class="container">
    <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="tg-topbar">
             <ul class="tg-contactinfo">
                @php
                    $date = date('l jS \\of F Y h:i:s A');
                @endphp
                <li>
                   <a href="javascript:void(0);">
                   <i class="fa fa-date"></i>
                   <span>{{ $date }}</span>
                   </a>
                </li>
                <li>
                   <i class="fa fa-phone"></i>
                   <span>{{ get_setting('phone')->value ?? 'null'}}</span>
                </li>
                <li>
                   <i class="fa fa-envelope-o"></i>
                   <span><a href="mailto:{{ get_setting('email')->value ?? 'null' }}">{{ get_setting('email')->value ?? 'null' }}</a></span>
                </li>
             </ul>
             <ul class="tg-addnav">
               <!--  <li>
                   <a href="javascript:void(0);">
                   <i class="fa fa-shopping-cart"></i>
                   <span>cart</span>
                   </a>
                </li> -->
                <li>
                   @auth
                        <a href="{{ route('admin.dashboard')}}">
                            <i class="fa fa-user"></i>
                            <span>User Profile</span>
                        </a>
                    @else
                        <a href="{{ route('login')}}">
                            <i class="fa fa-user"></i>
                            <span>Login</span>
                        </a>
                    @endauth
                </li>
                <!-- <li>
                   <a href="javascript:void(0);">
                   <i class="fa fa-user-plus"></i>
                   <span>Register</span>
                   </a>
                </li>
                <li>
                   <a href="javascript:void(0);">
                   <i class="fa fa-globe"></i>
                   <span>En</span>
                   </a>
                </li> -->
             </ul>
          </div>
          <div class="tg-navigationarea">
             <strong class="tg-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset(get_setting('site_logo')->value ?? 'frontend/assets/images/logos/logo-01.png')}}" width="315" height="60" alt="image">
                </a>
            </strong>
             <nav id="tg-nav" class="tg-nav">
                <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationvone" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   </button>
                </div>
                <div id="tg-navigationvone" class="collapse navbar-collapse tg-navigation">
                   <ul>
                      <li>
                        <a href="{{ route('home') }}">home</a>
                    </li>
                    @foreach($categories as $category)
                    <li class="menu-item-has-children">
                        <a href="{{ route('user.category.show',$category->slug) }}">{{ $category->name ??'NULL'}}</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="events.html">events V one</a></li>
                            <li><a href="eventsv2.html">events V Two</a></li>
                            <li><a href="event-detail.html">event Detail</a></li>
                        </ul> -->
                    </li>
                    @endforeach
                    <li><a href="javascript:void(0);"><i class="fa fa-search"></i></a></li>
                   </ul>
                </div>
             </nav>
          </div>
       </div>
    </div>
 </div>
</header>