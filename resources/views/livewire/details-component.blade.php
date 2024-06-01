<!-- Details -->
<div class="py-5">
    <div class="container card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="{{ asset('assets/images/products')}}/{{$product->image}}" /></div>
                      <div class="tab-pane" id="pic-2"><img src="{{ asset('assets/images/products') }}/{{ $product->image1 }}" /></div>
                      <div class="tab-pane" id="pic-3"><img src="{{ asset('assets/images/products') }}/{{ $product->image2 }}" /></div>
                      <div class="tab-pane" id="pic-4"><img src="{{ asset('assets/images/products') }}/{{ $product->image3 }}" /></div>
                      <div class="tab-pane" id="pic-5"><img src="{{ asset('assets/images/products') }}/{{ $product->image4 }}" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" /></a></li>
                      <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('assets/images/products') }}/{{ $product->image1 }}" /></a></li>
                      <li><a data-target="#pic-3" data-toggle="tab"><img src="{{ asset('assets/images/products') }}/{{ $product->image2 }}" /></a></li>
                      <li><a data-target="#pic-4" data-toggle="tab"><img src="{{ asset('assets/images/products') }}/{{ $product->image3 }}" /></a></li>
                      <li><a data-target="#pic-5" data-toggle="tab"><img src="{{ asset('assets/images/products') }}/{{ $product->image4 }}" /></a></li>
                    </ul>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{$product->name}}</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <!-- <span class="review-no">41 reviews</span> -->
                    </div>
                    <p class="product-description mt-3" style="font-size: large !important; line-height: 1.5;">{{$product->description}}</p>
                    <h4 class="price">Current Price: <span>${{$product->price}}</span></h4>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button" style="padding: 0px !important;">Add to Cart</button>
                        <button class="like btn btn-default" type="button"  style="padding: 0px !important;  width: 5rem;"><span class="fa fa-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Details -->
