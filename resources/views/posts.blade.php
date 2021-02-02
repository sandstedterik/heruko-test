<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
    <h1>Posts side</h1>


    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Blog title</label>
          <input type="text" name="title" class="form-control"  placeholder="Enter title">
        </div>

        <div class="form-group">
          <label for="content">What's on your mind</label>
          <textarea class="form-control" name="content" rows="3" placeholder="Enter your blog post"></textarea>
        </div>

        <button class="btn btn-primary">Publish</button>
      </form>

      

      

@foreach($posts as $post)
    <div class="container">
        <div class="jumbotron">
            <h1>{{ $post->title }}</h1>
            <p class="type"> {{ $post->content }}</p>
            <form action="/posts/{{ $post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete Post</button>
            </form> 
            <a class="btn btn-info" href="/posts/{{$post->id}}/edit">Edit post</a>   
        </div>           
    </div>
@endforeach

</body>
</html>