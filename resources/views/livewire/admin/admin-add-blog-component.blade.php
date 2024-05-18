<section id="home" class="home">
    <section class="gallery" style="margin-top: 6rem">
      <h1 class="heading" style="margin-top: -1.5rem" id="team"> Add Blogs </h1>
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
                                <form class="" wire:submit.prevent="addblog">
                                    <div class="mb-5 mt-3">
                                        <label for="name" class="form-label mb-3 float-start"> name </label>
                                        <input type="text" name="name" required class="form-control fs-4 mb-5" style="height: 40px" placeholder=" Enter products name " wire:model="name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="short_description" class="form-label mb-3 float-start"> short description </label>
                                        <textarea type="text" name="short_description" class="form-control fs-4 mb-5" style="height: 40px" placeholder=" Enter products short_description " wire:model="short_description"></textarea>
                                        @error('short_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="long_description" class="form-label mb-3 float-start"> long description </label>
                                        <textarea type="text" name="long_description" class="form-control fs-4 mb-5" style="height: 40px" placeholder=" Enter products long_description " wire:model="long_description"></textarea>
                                        @error('long_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-5 mt-3">
                                        <label for="image" class="form-label mb-3 float-start"> image </label>
                                        <input type="file" name="image" class="form-control fs-4 mb-5" style="height: 40px" wire:model="image"></input>
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120">
                                        @endif
                                        @error('image')
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
