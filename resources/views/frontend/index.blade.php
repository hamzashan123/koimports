@extends('layouts.app')
@section('title', 'Homepage')
@section('content')
<!-- promotion area start -->
@if($coupon)
<div class="p-1 text-white text-center"
     style="background-image: url('{{ asset('frontend/img/bg/12.jpg') }}')">
    {{ $coupon->value }}{{ $coupon->type == 'percentage' ? '%' : '' }} off use ({{ $coupon->code }})
</div>
@endif
<!-- promotion area end -->

@include('partials.frontend.sliders')

<!-- services area start -->
<div class="fruits-services ptb-50 delivery-quality-experience">
    <div class="fruits-services-wrapper">
        <div class="single-fruits-services">
            
            <div class="fruits-services-content">
            <img src="{{asset('images/truck.png')}}" alt="">
                <h4>24 Hour Delivery</h4>
                <p>KOImports offer a 24 hour UK delivery service on all non bulky orders up to 25 kilos.</p>
            </div>
        </div>
        <div class="single-fruits-services">
           
            <div class="fruits-services-content">
            <img src="{{asset('images/quality.png')}}" alt="">
                <h4>Quality Products</h4>
                <p>With many sole distribution rights, we believe we can supply not only great value but the best quality branded products.</p>
            </div>
        </div>
        <div class="single-fruits-services">
            
            <div class="fruits-services-content">
            <img src="{{asset('images/experience.png')}}" alt="">
                <h4>Experience</h4>
                <p>We have over 25 years experience in the Koi trade and are very passionate and knowledgeable about all of our products.</p>
            </div>
        </div>

        <div class="single-fruits-services">
           
            <div class="fruits-services-content">
            <img src="{{asset('images/family.png')}}" alt="">
                <h4>Family Business</h4>
                <p>As a family run business, we pride ourselves in delivering an outstanding, efficient service ensuring your needs are paramount.</p>
            </div>
        </div>
    </div>
</div>
<!-- services area end -->


<!-- categories area start -->
<div class="container our-categories">
    <div class="ptb-50">
        <div class="section-title-furits text-center mb-95">
            <h2>BROWSE OUR CATEGORIES</h2>
        </div>
        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                            <ul class="splide__list">
                            @foreach($categories as $category) 
                            @if(!empty($category->cover) )

                                <li class="splide__slide"> 
                                    <a href="{{ route('shop.index', $category->slug) }}">
                                    <img 
                                        src="{{ asset('storage/images/categories/' . $category->cover ?? '') }}"
                                        alt="{{ $category->name ?? '' }}">
                                    
                                    </a>  
                                    <a class="headingCategoryName" href="{{ route('shop.index', $category->slug) }}">
                                        {{ $category->name }} 
                                    </a>
                                </li>
                                @endif
                            @endforeach
                            </ul>
                    </div>
                </div>
        <section>
            <div class="row">
                
            </div>
        </section>
    
        <!-- <section>
           
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <a class="category-item" href="{{ route('shop.index', $categories[0]->slug ?? '') }}">
                        @if($categories[0]->cover ?? '')
                            <img class="img-fluid"
                                 src="{{ asset('storage/images/categories/' . $categories[0]->cover ?? '') }}"
                                 alt="{{ $categories[0]->name ?? '' }}">
                        @else
                            <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                        @endif
                        <strong class="category-item-title">{{ $categories[0]->name ?? '' }}</strong>
                    </a>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <a class="category-item mb-4" href="{{ route('shop.index', $categories[1]->slug ?? '') }}">
                        @if($categories[1]->cover ?? '')
                        <img class="img-fluid"
                             src="{{ asset('storage/images/categories/' . $categories[1]->cover ?? '') }}"
                             alt="{{ $categories[1]->name ?? '' }}">
                        @else
                            <img class="img-fluid"
                                 style="margin: 7px;"
                                 src="{{ asset('frontend/assets/categories/cat-img-2.jpg') }}"
                                 alt="{{ $categories[1]->name ?? '' }}">
                        @endif
                        <strong class="category-item-title" style="margin-top: -124px;">{{ $categories[1]->name ?? '' }}</strong>
                    </a>
                    <a class="category-item" href="{{ route('shop.index', $categories[2]->slug ?? '') }}">
                        @if($categories[2]->cover ?? '')
                        <img class="img-fluid"
                             src="{{ asset('storage/images/categories/' . $categories[2]->cover ?? '') }}"
                             alt="{{ $categories[2]->name ?? '' }}">
                        @else
                            <img class="img-fluid"
                                 style="margin: 9px;"
                                 src="{{ asset('frontend/assets/categories/cat-img-3.jpg') }}"
                                 alt="{{ $categories[2]->name ?? '' }}">
                        @endif
                        <strong class="category-item-title" style="margin-top: 104px;">{{ $categories[2]->name ?? '' }}</strong>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="category-item" href="{{ route('shop.index', $categories[3]->slug ?? '') }}">
                        @if($categories[3]->cover ?? '')
                        <img class="img-fluid"
                             src="{{ asset('storage/images/categories/' . $categories[3]->cover ?? '') }}"
                             alt="">
                        @else
                            <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-4.jpg') }}"
                                 alt="{{ $categories[3]->name ?? '' }}">
                        @endif
                        <strong class="category-item-title">{{ $categories[3]->name ?? '' }}</strong>
                    </a>
                </div>
            </div>
        </section> -->
    </div>
</div>
<!-- categories area end -->

<!-- banner area start -->
<!-- <div class="fruits-choose-area pb-65 bg-img mt-5" style="background-image: url('{{ asset('frontend/img/banner/53.png') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-8 col-12">
                <div class="fruits-choose-wrapper-all">
                    <div class="fruits-choose-title mt-5">
                        <h2>WHY CHOOSE US ?</h2>
                    </div>
                    <div class="fruits-choose-wrapper">
                        <div class="single-fruits-choose">
                            <div class="fruits-choose-serial">
                                <h3>01</h3>
                            </div>
                            <div class="fruits-choose-content">
                                <h4>Free Shipping.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="single-fruits-choose">
                            <div class="fruits-choose-serial">
                                <h3>02</h3>
                            </div>
                            <div class="fruits-choose-content">
                                <h4>100% ORIGINAL PRODUCTS.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="single-fruits-choose">
                            <div class="fruits-choose-serial">
                                <h3>03</h3>
                            </div>
                            <div class="fruits-choose-content">
                                <h4>Online Support.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- banner area end -->

<!-- TRENDING PRODUCTS -->
<div class="container our-products">
    <livewire:frontend.product.top-trending-products />
</div>



<script>
  
//   new Splide('.splide', {
// 	type: 'loop',
//     autoplay: 'pause',
// }).mount();


var splideCategoryCarousel = new Splide( '.splide', {
  type   : 'loop',
  perPage: 4,
  autoplay: true,
  perMove: 1,
  pagination: false,
  breakpoints: {
            1024: {
              perPage: 2,
             
            },
            767: {
              perPage: 1,
          
            },
            640: {
              perPage: 1,
        
            },
          },
} );

splideCategoryCarousel.mount();

</script>
@endsection

