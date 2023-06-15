@extends('layouts.app')
@section('title', 'Registration')
@section('content')

    <div class="breadcrumb-area pt-5 pb-5" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>register</h2>
                <ul>
                    <li><a href="{{route('login')}}">login</a></li>
                    <li> <a href="{{route('register')}}"> register </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="register-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="form-group">
                                @if(Session::has('success'))
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                @endif
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="username" class="text-small text-uppercase">{{ __('Name*') }}</label>
                                                <input id="username" type="text" class="form-control form-control-lg" name="username" value="{{ old('username') }}" placeholder="Name">
                                                @error('username')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="first_name" class="text-small text-uppercase">{{ __('First Name*') }}</label>
                                                <input id="first_name" type="text" class="form-control form-control-lg" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                                                @error('first_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="last_name" class="text-small text-uppercase">{{ __('Last Name*') }}</label>
                                                <input id="last_name" type="text" class="form-control form-control-lg" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                                                @error('last_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="last_name" class="text-small text-uppercase">{{ __('Business Name*') }}</label>
                                                <input id="business_name" type="text" class="form-control form-control-lg" name="business_name" value="{{ old('business_name') }}" placeholder="Business Name">
                                                @error('business_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <h4 style="margin-left: 15px; font-weight:500">Business Address*:</h4>
                                      
                                        <div class="col-12">
                                            <div class="form-group">
                                                <!-- <label for="last_name" class="text-small text-uppercase">{{ __('Address Line 1') }}</label> -->
                                                <input id="address_line1" type="text" class="form-control form-control-lg" name="address_line1" value="{{ old('address_line1') }}" placeholder="Address Line 1">
                                                @error('address_line1')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <!-- <label for="last_name" class="text-small text-uppercase">{{ __('Address Line 2') }}</label> -->
                                                <input id="address_line2" type="text" class="form-control form-control-lg" name="address_line2" value="{{ old('address_line2') }}" placeholder="Address Line 2">
                                                @error('address_line2')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                               
                                                <input id="city" type="text" class="form-control form-control-lg" name="city" value="{{ old('city') }}" placeholder="City">
                                                @error('city')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                               
                                                <input id="state" type="text" class="form-control form-control-lg" name="state" value="{{ old('state') }}" placeholder="State / Province / Region">
                                                @error('state')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                
                                                <input id="zip_code" type="text" class="form-control form-control-lg" name="zip_code" value="{{ old('zip_code') }}" placeholder="Postal / Zip Code">
                                                @error('zip_code')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="email" class="text-small text-uppercase">{{ __('E-Mail*') }}</label>
                                                <input id="email" type="email" class="form-control form-control-lg" value="{{ old('email') }}" name="email" placeholder="Enter your Email">
                                                @error('email')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="phone" class="text-small text-uppercase">{{ __('Phone*') }}</label>
                                                <input id="phone" type="number" class="form-control form-control-lg" name="phone" value="{{ old('phone') }}"  placeholder="Enter your Phone Number">
                                                @error('phone')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="website" class="text-small text-uppercase">{{ __('Website') }}</label>
                                                <input id="website" type="text" class="form-control form-control-lg" name="website" value="{{ old('website') }}" placeholder="Website">
                                                @error('website')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <h4 style="margin-left: 15px; font-weight:500">A little about your business model</h4>

                                        <div class="col-12">
                                            <div class="form-group">
                                            <label for="website" class="text-small text-uppercase">{{ __('Do you currently own /​ rent premises that will be open to the general public?') }}</label>
                                            <br>
                                            <input type="radio"  name="own_rent" value="yes" checked /> &nbsp; Yes 
                                            &nbsp;
                                            <input type="radio" name="own_rent" value="no" />&nbsp; No 
                                                
                                               
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="open_store_time" class="text-small text-uppercase"> I'm looking to open my store in... </label>
                                                <select class="form-control" name="open_store_time">
                                                    <option value="My Store is already open"> My Store is already open</option>
                                                    <option value="< 3 Months"> < 3 Months</option>
                                                    <option value="6-12 Months"> 6-12 Months</option>
                                                    <option value="12 Months+"> 12 Months+</option>

                                                </select>
                                                @error('open_store_time')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>

                                        <h5 style="margin-left: 15px;">Business Strategy*</h5>

                                        <div class="col-12">
                                            <div class="form-group">
                                                &nbsp;  
                                                <input type="checkbox" name="business_strategy[]" value="bricks_mortar" checked >
                                                Bricks & Mortar    
                                                &nbsp;
                                                <input type="checkbox" name="business_strategy[]" value="ecommerce" > 
                                                Ecommerce
                                                &nbsp;
                                                <input type="checkbox" name="business_strategy[]" value="drop_shipping" >  
                                                Drop Shipping

                                                @error('open_store_time')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="sourcing" class="text-small text-uppercase">{{ __('Where are you sourcing your goods from? (Suppliers etc.)*') }}</label>
                                                <input id="sourcing" type="text" class="form-control form-control-lg" name="sourcing" value="{{ old('sourcing') }}" placeholder="KOIMPORTS LTD OR Other...">
                                                @error('sourcing')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="business_description" class="text-small text-uppercase">{{ __('Brief business description*') }}</label>
                                                <textarea id="business_description" name="business_description" value="{{ old('business_description') }}" placeholder="Is there anything you would like to mention?" > </textarea>
                                                @error('business_description')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                                We need to understand a little more about your business.
                                                <br> <br>
                                                Thank you so much for expressing an interest in becoming an aquatic retailer. We will be in touch should you qualify for an account application.
                                               
                                            </div>
                                        </div>

                                        
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password" class="text-small text-uppercase">{{ __('New Password') }}</label>
                                                <input id="password" type="password" class="form-control form-control-lg" name="password" placeholder="Enter your password">
                                                @error('password')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-confirm" class="text-small text-uppercase">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password">
                                                @error('password-confirm')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <h4 style="margin-left: 15px; font-weight:500">Marketing Preferences</h4>
                                        <p style="margin-left: 15px;">Would you like to know more about Koimports? From time to time we send out emails keeping you up to date with what's happening at KOIMPORTS LTD. If you prefer not to recieve emails from us let us know below. Thanks!</p>
                                       
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="receiveemail" id="receiveemail" {{ old('receiveemail') ? 'checked' : '' }}>
                                                <label class="custom-control-label text-small" for="receiveemail">
                                                    {{ __('I would like to receive marketing emails from KOIMPORTS Ltd') }}
                                                </label>

                                            </div>
                                        </div>
                                        
                                        <br>
                                        <br>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label text-small" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>

                                            </div>
                                        </div> -->
                                    </div>
                                    
                                     
                                   
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark">
                                            {{ __('Register') }}
                                        </button>
                                        @if(Route::has('login'))
                                            <a class="btn btn-link text-small" href="{{ route('login') }}">
                                                {{ __('Login?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
