<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-2">
        <h1 class="text-white text-center">Product</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card border-1 shadow-lg my-4">
                    <div class="card-header bg-secondary text-white text-center">
                        <h1>Edit Product</h1>
                    </div>
                    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Name</b></label>
                            <input type="text" value="{{ old('name', $product->name) }}" name="name" class="@error('name') is-invalid @enderror form-control form-control-lg" placeholder="Enter name of product">
                            @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Sku</b></label>
                            <input type="text" value="{{ old('sku', $product->sku) }}" name="sku" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Enter sku">
                            @error('sku')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Price</b></label>
                            <input type="text" value="{{ old('price',$product->price) }}" name="price" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Enter price">
                            @error('price')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Description</b></label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Enter Description of product">{{ old('description',$product->description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Image</b></label>
                            <input type="file" name="image" value="{{ old('image') }}" class="form-control form-control-lg" placeholder="">
                            @if (filled($product->image))
                                            
                            <img class="w-50 my-3" src="{{ Storage::disk("public")->url("products/$product->image") }}" class="img-fluid" alt="">

                        
                    @endif
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-lg btn-success">update</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
