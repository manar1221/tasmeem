<!-- collection -->
<section id = "collection" class = "py-5" style="margin-top: 100px;">
    <div class = "container">
        <div class = "title text-center">
            <h2 class = "position-relative d-inline-block ">Shop</h2>
        </div>

        <div class = "row g-0">
            <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                <a href="{{route('store')}}"><button type = "button" class = "btn m-2 text-dark  fs-3 pb-4 pt-1" data-filter = "*">All</button></a>
                @foreach ($categories as $category)
                <a href="{{route('product.category',['id'=>$category->id])}}"><button type = "button" class = "btn m-2 text-dark fs-4 pb-4 pt-1" data-filter = ".prand"> {{ $category->name }} </button></a>
                @endforeach
            </div>

            <div class = "collection-list mt-4 row gx-0 gy-3">
                @foreach ($products as $product)
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 prand">
                        <div class = "collection-img position-relative">
                            <a href="product_details.html" target="" rel="noopener noreferrer">
                                <img src = "{{ asset('assets/images/products')}}/{{$product->image}}" class = "w-100">
                            </a>
                            <span class = "position-absolute text-white d-flex align-items-center justify-content-center fs-4" style="background-color: #903EB4;">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "" style="color: #903EB4;"><i class = "fas fa-star"></i></span>
                                <span class = "" style="color: #903EB4;"><i class = "fas fa-star"></i></span>
                                <span class = "" style="color: #903EB4;"><i class = "fas fa-star"></i></span>
                                <span class = "" style="color: #903EB4;"><i class = "fas fa-star"></i></span>
                                <span class = "" style="color: #903EB4;"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1 fs-3 fw-bold">{{ $product->name }} </p>
                            <span class = "fw-bold fs-4 text-warning">$ {{ $product->price }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- end of collection -->
