


<style>

.myaccordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.myactive, .myaccordion:hover {
  background-color: #ccc;
}

.myaccordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.myAccordion-active:after {
  content: "\2212";
}

.shop-filter-child {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
    </style>



<div class="shop-sidebar mr-50">
    <div class="sidebar-widget mb-40">
        <h3 class="sidebar-title">CATEGORIES</h3>
        @forelse($shop_categories_menu as $category)
            <div class="py-2 px-4 bg-white text-black mb-3 parent-list-sidebar myaccordion">
                <strong class="small text-uppercase font-weight-bold">
                    <a class="text-decoration-none text-white" href="{{ route('shop.index', $category->slug) }}">
                        {{ $category->name }}
                    </a>
                </strong>
            </div>
            <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal shop-filter-child">
                @forelse($category->appearedChildren as $sub_category)
                    <li class="mb-2">
                        <a class="reset-anchor" href="{{ route('shop.index', $sub_category->slug) }}">
                            > {{ $sub_category->name }}
                        </a>
                    </li>
                @empty
                @endforelse
            </ul>
        @empty
        @endforelse
    </div>
    
</div>
