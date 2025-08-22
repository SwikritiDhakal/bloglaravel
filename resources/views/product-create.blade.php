<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
 <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card p-3">
                    <form action="{{route('product.store')}}" method="post">
                        @csrf 
                        <div class="mb-3">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="" value={{old('product_name')}}>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        </div>

                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="product_description" class="form-control" id="" value={{old('product_description')}}>
                                {{old('product_description')}}
                            </textarea>
                            @error('product_description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
 </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>