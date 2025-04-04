<section id="home" class="home">
    <section class="gallery" style="margin-top: 6rem">
      <h1 class="heading" style="margin-top: -1.5rem" id="team"> blogs </h1>
      <!-- Inner -->
      <div class="">
        <!-- Single item -->
        <div class="mb-2">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{route('admin.blog.add')}}" class="btn btn-success float-end" style="height:5rem;">add new blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body fs-3">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>image</th>
                                            <th>name</th>
                                            <th>short description</th>
                                            <th>long description</th>
                                            <th>date</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($blogs->currentPage()-1)*$blogs->perPage();
                                        @endphp
                                        @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td><img src="{{ asset('assets/images/blogs')}}/{{$blog->image}}" alt="{{ $blog->name }}" width="100"></td>
                                            <td>{{ $blog->name }}</td>
                                            <td>{{ $blog->short_description }}</td>
                                            <td>{{ $blog->long_description }}</td>
                                            <td>{{ $blog->created_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.blog.edit',['blog_id'=>$blog->id]) }}" class="text-info">edit</a>
                                                <a href="#" class="text-danger" onclick="deleteConfirmation({{ $blog->id }})" style="margin-left: 20px;">delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>


 <div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> تأكيد عملية الحذف </h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation"> الغاء </button>
                        <button type="button" class="btn btn-danger" onclick="deleteblog()"> حذف </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {
            @this.set('blog_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteblog()
        {
           @this.call('deleteblog');
           $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
