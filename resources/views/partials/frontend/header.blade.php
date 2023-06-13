<div class="header-top-new">
    <div class="contact-header-top">
        <ul>
            <li><a href="tel:01277 810870"> <i class="fas fa-phone-alt"></i> 01277 810870 </a></li>
            <li><a href="mailto:info@koimports.co.uk"> <i class="fas fa-envelope"></i> Info@koimports.co.uk</a></li>
            <li><a> <i class="fas fa-map-marker"></i> Unit 19, Fanton Hall, Off A127 Wickford, Essex. SS12 9JF. </a></li>

        </ul>
    </div>
    <div class="furits-login-cart">
                    <div class="furits-login menu-hover">
                        <ul>
                            @guest
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Reg</a></li>
                            @else
                             

                                <li>
                                    <a href="javascript:void(0);" style="color: white;">My Account</a>
                                    <ul class="single-dropdown dasboard-account">
                                        @role('admin')
                                        <li>
                                            <a href="{{ route('admin.index') }}" style="color: #578a01;">
                                                Administration
                                            </a>
                                        @endrole
                                        @auth
                                            <li><a href="{{ route('user.profile') }}" style="color: #578a01;">Profile</a>
                                            </li>
                                        @endauth
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #578a01;">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    <livewire:frontend.header.cart-component />
    </div>

</div>

<header class="mainHeader">
    <div class="header-bottom wrapper-padding-2 res-header-sm sticker header-sticky-3 furits-header">
      
            <div class="header-bottom-wrapper ">
                <div class="logo-2 menu-hover">
                    <a href="{{route('home')}}">
                        <img  src="{{asset('img/logonew.png')}}" alt="">
                    </a>
                </div>

                <div class="mobile-menu-area d-md-block d-lg-none d-xl-none">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="{{route('home')}}">HOME</a></li>
                                    <li><a href="{{route('aboutus')}}">ABOUT</a></li>
                                    <li><a href="{{route('shop.index')}}">PRODUCTS</a></li>

                                    <!-- <li><a href="#">Ponds</a>
                                        <ul>
                                            <li>
                                            @foreach($shop_categories_menu as $global_category)
                                                <li>
                                                    <a href="{{ route('shop.index', $global_category->slug) }}">
                                                        {{ $global_category->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li> -->
                                    <li><a href="{{route('contact.index')}}">contact</a></li>
                                    @guest
                                        <li>
                                            <a href="{{route('login')}}">Login</a>
                                        </li>
                                        <li>
                                            <a href="{{route('register')}}">Reg</a>
                                        </li>
                                    @else
                                       
                                       
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                
                <div class="furniture-bottom-wrapper">
                    <div class="furniture-login">
                    </div>
                    <div class="furniture-search">
                        <form>
                            <div class="form-input">
                                <input id="search" type="text"
                                    value="{{ old('keyword', request()->keyword) }}"
                                    placeholder="Search for product...">
                            </div>
                        </form>
                    </div>

                    <div class=" button-box">
                        <a href="{{route('register')}}" class="default-btn" >Register for trade account today</a>            
                    </div>
                    <div class="furniture-wishlist">
                        <livewire:frontend.header.wishlist-component />
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </div>
     

              
             
                </div>
            
        </div>
    </div>
</header>

  
<div class="menu-style-2 handicraft-menu menu-hover">
                    <nav>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>
                                <a href="{{route('aboutus')}}">About Us</a>
                                <!-- <ul class="single-dropdown">
                                    @include('partials.frontend.pages')
                                </ul> -->
                            </li>
                            <li>
                                <a href="{{route('shop.index')}}">
                                Products
                                </a>
                            </li>
                           
                            <ul class="single-dropdown">
                                <li>
                                    <a href="{{route('contact.index')}}">Contact us</a>
                                </li>
                                @guest
                                    <li>
                                        <a href="{{route('login')}}">Login</a>
                                    </li>
                                    @if (route('register'))
                                        <li>
                                            <a href="{{route('register')}}">Register</a>
                                        </li>
                                    @endif
                                @endguest
                                <li>
                                    <a href="{{route('cart.index')}}">Cart page</a>
                                </li>
                            </ul>
                            <!-- <li class="dropdown">
                                <a href="javascript:void(0);">Ponds</a>
                                
                                 <div class="dropdown-list"> 
                                    @foreach($shop_categories_menu as $global_category)
                                    <ul class="parent-list">
                                        <li>
                                            <a href="{{ route('shop.index', $global_category->slug) }}" class="parent-child">
                                                {{ $global_category->name }}
                                            </a>
                                            <ul class="child-list">
                                            @forelse($global_category->appearedChildren as $sub_category)
                                               
                                                    <li class="mb-2" >
                                                        <a class="reset-anchor" href="{{ route('shop.index', $sub_category->slug) }}">
                                                            {{ $sub_category->name }}
                                                        </a>
                                                    </li>
                                               
                                            @empty
                                            
                                            @endforelse
                                            
                                            </ul>
                                          
                                        </li>
                                           
                                            </ul>
                                    @endforeach
                                </div>
                            </li> -->
                            
                            <li>
                                <a href="{{route('contact.index')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
<div class="breadcrumb-area">

    <div class="container-fluid">
       
    </div>
</div>
