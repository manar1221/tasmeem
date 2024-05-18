<section id="home" class="home">
    <section class="gallery" style="margin-top: 6rem">
      <h1 class="heading" style="margin-top: -1.5rem" id="team"> Add Products </h1>
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
                                <form class="" wire:submit.prevent="addProduct">
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
                                        <input type="file" name="image" class="form-control fs-4 mb-5" style="height: 40px" wire:model="image"></input>
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120">
                                        @endif
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image1" class="form-label mb-3 float-start"> image1 </label>
                                        <input type="file" name="image1" class="form-control fs-4 mb-5" style="height: 40px" wire:model="image1"></input>
                                        @if ($image1)
                                            <img src="{{ $image1->temporaryUrl() }}" width="120">
                                        @endif
                                        @error('image1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image2" class="form-label mb-3 float-start"> image2 </label>
                                        <input type="file" name="image2" class="form-control fs-4 mb-5" style="height: 40px" wire:model="image2"></input>
                                        @if ($image2)
                                            <img src="{{ $image2->temporaryUrl() }}" width="120">
                                        @endif
                                        @error('image2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image3" class="form-label mb-3 float-start"> image3 </label>
                                        <input type="file" name="image3" class="form-control fs-4 mb-5" style="height: 40px" wire:model="image3"></input>
                                        @if ($image3)
                                            <img src="{{ $image3->temporaryUrl() }}" width="120">
                                        @endif
                                        @error('image3')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image4" class="form-label mb-3 float-start"> image4 </label>
                                        <input type="file" name="image4" class="form-control fs-4 mb-5" style="height: 40px" wire:model="image4"></input>
                                        @if ($image4)
                                            <img src="{{ $image4->temporaryUrl() }}" width="120">
                                        @endif
                                        @error('image4')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image5" class="form-label mb-3 float-start"> image5 </label>
                                        <input type="file" name="image5" class="form-control fs-4 mb-5" style="height: 40px" wire:model="image5"></input>
                                        @if ($image5)
                                            <img src="{{ $image5->temporaryUrl() }}" width="120">
                                        @endif
                                        @error('image5')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary float-end pb-5"> submit </button>
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
