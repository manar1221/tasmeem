<!-- blog -->
<section class="blogs" id="blogs" style="padding:3rem 7%;">

    <h1 class="heading">  <span>{{__('mycustom.blogs')}}</span> </h1>

    <div class="box-container">
        @foreach ($blogs as $blog)
            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/images/blogs')}}/{{$blog->image}}" alt="">
                </div>
                <div class="content">
                    <a href="{{route('blog.details',['id'=>$blog->id])}}" class="title">{{ $blog->name }}</a>
                    <span>{{ $blog->created_at}}</span>
                    <p>{{ $blog->short_description}}</p>
                    <a href="{{route('blog.details',['id'=>$blog->id])}}" class="btn fs-3">{{__('mycustom.readmore')}}</a>
                </div>
            </div>
        @endforeach
    </div>

</section>
<!-- end of blog -->
