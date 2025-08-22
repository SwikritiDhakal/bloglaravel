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
                <div class="col-md-5">
                    <div class="card p-3">
                        <h2>Edit {{$post->title}}</h2>
                       
                        <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" value={{$post->title}} id="">
                            @error('title');
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">

                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control"  id="">
                            <img style="width:100px" src="{{asset('uploads/images/'.$post->image)}}" alt="">
                            @error('image');
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" value={{$post->description}} id="">

                            {{$post->description}}
                            </textarea>
                            @error('description');
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary">
                                submit
                            </button>
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