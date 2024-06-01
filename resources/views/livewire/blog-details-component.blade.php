<section class="mt-5" style="padding-top: 6rem;">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-12 col-xsm-3 ">
                <div class="single-page pr-30">
                    <div class="single-header style-2">
                        <h1 class="mb-4" style="direction: rtl;">{{$blog->name}}</h1>
                    </div>
                    <figure class="single-thumbnail"  style="direction: rtl;">
                        <img src="{{ asset('assets/images/blogs')}}/{{$blog->image}}" alt="" class="rounded">
                    </figure>
                    <div class="single-content fs-4" style="direction: rtl; font-size: 16px; line-height: 1.5; margin: 0; padding: 0;">
                        <pre>{{ $blog->long_description }}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
