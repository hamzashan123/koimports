<div wire:ignore id="all-products" class="product-style-area ptb-50 wow fadeInUp">
    <div class="section-title-furits text-center mb-95">
       
        <h2>Top Products</h2>
    </div>
    <div class="container">
        <div class="row">
            @forelse($products as $product)
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            
                            <img src="{{ $product->product_import_url }}" alt="">

                            <div class="product-furit-action">
                                <a wire:click.prevent="addToCart('{{ $product->id }}')"
                                   class="furit-animate-left" title="Add To Cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <a wire:click.prevent="addToWishList('{{ $product->id }}')"
                                   class="furit-animate-right" title="Wishlist">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4>
                                <a href="{{route('product.show', $product->slug)}}">{{ $product->name }}</a>
                            </h4>
                            @if(!empty(Auth::user()->customer_type) && Auth::user()->customer_type == 'premium')
                                            <span>£{{ $product->premium_price }}</span>
                                        @elseif(!empty(Auth::user()->customer_type) && Auth::user()->customer_type == 'general')
                                            <span>£{{ $product->price }}</span>
                                        @endif
                        </div>
                    </div>
                </div>
            @empty
                <p>No products found.</p>
            @endforelse
        </div>
    </div>
</div>

