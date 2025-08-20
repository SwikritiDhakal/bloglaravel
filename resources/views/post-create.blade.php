<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
        <section>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-5">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                        <div class="card p-3">
                            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                               @csrf
                               <h2>Add Post</h2>
                               <div class="mb-3">
                                <label for=""> Title </label>
                                    <input type="text" class="form-control" value="{{old('title')}}" name="title">
                                    @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                               </div> 

                               <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" id="">
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                               </div>
                               <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description"  class="form-control" id="" cols="30" rows="10" value={{old('description')}}>
                                    {{old('description')}}
                                </textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                               </div>

                                <div class="mb-3">
                                <button class="btn btn-success"type="submit">submit</button>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td><img style="width:100px" src="{{asset('uploads/images/'.$post->image)}}" alt=""></td>
                            <td>{{$post->description}}</td>
                            <td><a href="{{route('post.edit',$post->id)}}">Edit</a></td>
                            <td><a href="">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>