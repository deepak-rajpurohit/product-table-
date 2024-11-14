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
        <h1 class="text-white text-center">Product List</h1>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card border-1 shadow-lg my-4">
                    <div class="card-header">
                        <h1>Create Product</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Name</b></label>
                            <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter name of product">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Sku</b></label>
                            <input type="text" name="sku" class="form-control form-control-lg" placeholder="Enter sku">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Price</b></label>
                            <input type="text" name="price" class="form-control form-control-lg" placeholder="Enter price">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"><b>Description</b></label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Enter Description of product"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
