<!doctype html>
<html lang="en">
  <head>
    <title>edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1>update movie details :</h1>
    <form action="/update" method="POST" enctype="multipart/form-data">
        @csrf
       
        <div class="form-group">
            <input type="hidden" name="id" value="{{$movie['id']}}">
          <label for="">movie image:</label>
          <input type="file" class="form-control" placeholder="select image" name="image" value="{{$movie->movie_image}}">
        </div>
        <div class="form-group">
          <label for="pwd">movie name:</label>
          <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$movie->movie_name}}">
        </div>
        <div class="form-group">
            <label for="pwd">movie genre:</label>
            <input type="text" class="form-control" placeholder="Enter genre" name="genre" value="{{$movie->movie_genre}}">
          </div>
          <div class="form-group">
            <label for="pwd">movie description:</label>
            <input type="text" class="form-control" placeholder="Enter description" name="desc" value="{{$movie->movie_description}}">
          </div>
          {{-- <div class="pull-right mb-2">
          <a class="btn btn-warning" href="{{route('add')}}">back</a></div> --}}
        <button type="submit" class="btn btn-primary" name="edit">edit</button>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>