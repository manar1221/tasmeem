<section id="home" class="home">
    <section class="gallery" style="margin-top: 6rem">
      <h1 class="heading" style="margin-top: -1.5rem" id="team"> Edit Products </h1>
      <!-- Inner -->
      <div class="">
        <!-- Single item -->
        <div class="mb-2">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="card">
                            <div class="card-body fs-3">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form class="" wire:submit.prevent="updateProduct">
                                    <div class="mb-5 mt-3">
                                        <label for="name" class="form-label mb-3 float-start"> name </label>
                                        <input type="text" name="name" required class="form-control fs-4 mb-5" style="height: 40px" placeholder=" Enter products name " wire:model="name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="description" class="form-label mb-3 float-start"> description </label>
                                        <textarea type="text" name="description" class="form-control fs-4 mb-5" style="height: 40px" placeholder=" Enter products description " wire:model="description"></textarea>
                                        @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="price" class="form-label mb-3 float-start"> price </label>
                                        <input type="text" name="price" class="form-control fs-4 mb-5" style="height: 40px" placeholder=" Enter products price " wire:model="price"></input>
                                        @error('price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="category_id" class="form-label mb-3 float-start"> category </label>
                                        <select name="category_id" class="form-control fs-4 mb-5" style="height: 40px" wire:model="category_id">
                                            <option value="">select category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image" class="form-label mb-3 float-start"> main image </label>
                                        <input type="file" name="image" class="form-control fs-4 mb-5" style="height: 40px" wire:model="newimage"></input>
                                        @if ($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" width="120">
                                        @else
                                            <img src="{{asset('assets/images/products')}}/{{$image}}" width="120">
                                        @endif
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image1" class="form-label mb-3 float-start"> image1 </label>
                                        <input type="file" name="image1" class="form-control fs-4 mb-5" style="height: 40px" wire:model="newimage1"></input>
                                        @if ($newimage1)
                                            <img src="{{ $newimage1->temporaryUrl() }}" width="120">
                                        @else
                                            <img src="{{asset('assets/images/products')}}/{{$image1}}" width="120">
                                        @endif
                                        @error('image1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image2" class="form-label mb-3 float-start"> image2 </label>
                                        <input type="file" name="image2" class="form-control fs-4 mb-5" style="height: 40px" wire:model="newimage2"></input>
                                        @if ($newimage2)
                                            <img src="{{ $newimage2->temporaryUrl() }}" width="120">
                                        @else
                                            <img src="{{asset('assets/images/products')}}/{{$image2}}" width="120">
                                        @endif
                                        @error('image2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image3" class="form-label mb-3 float-start"> image3 </label>
                                        <input type="file" name="image3" class="form-control fs-4 mb-5" style="height: 40px" wire:model="newimage3"></input>
                                        @if ($newimage3)
                                            <img src="{{ $newimage3->temporaryUrl() }}" width="120">
                                        @else
                                            <img src="{{asset('assets/images/products')}}/{{$image3}}" width="120">
                                        @endif
                                        @error('image3')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image4" class="form-label mb-3 float-start"> image4 </label>
                                        <input type="file" name="image4" class="form-control fs-4 mb-5" style="height: 40px" wire:model="newimage4"></input>
                                        @if ($newimage4)
                                            <img src="{{ $newimage4->temporaryUrl() }}" width="120">
                                        @else
                                            <img src="{{asset('assets/images/products')}}/{{$image4}}" width="120">
                                        @endif
                                        @error('image4')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image5" class="form-label mb-3 float-start"> image5 </label>
                                        <input type="file" name="image5" class="form-control fs-4 mb-5" style="height: 40px" wire:model="newimage5"></input>
                                        @if ($newimage5)
                                            <img src="{{ $newimage5->temporaryUrl() }}" width="120">
                                        @else
                                            <img src="{{asset('assets/images/products')}}/{{$image5}}" width="120">
                                        @endif
                                        @error('image5')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary float-end pb-5"> Edit </button>
                                </form>
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
