<!doctype html>
<html lang="en">
  <head>
    <title>view</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     
      <div class="container">
        <h2>Movies Table</h2>
        <p></p>            
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>movie image</th>
              <th>movie name</th>
              <th>movie genre</th>
              <th>movie description</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($movies as $movie)
            <tr>
              <td>{{$movie->id}}</td>
              <td><img src="{{asset('storage/img/'.$movie->movie_image)}}" alt="" style="height:60px;width:60px; "></td>
              <td>{{$movie->movie_name}}</td>
              <td>{{$movie->movie_genre}}</td>
              <td>{{$movie->movie_description}}</td>
              <td>
                <a href="{{'view/'.$movie->id}}"><button type="submit" class="btn btn-danger mb-1">view</button></a>
                  <a href="{{'delete/'.$movie->id}}"><button type="submit" class="btn btn-danger">delete</button></a>
                  <a href="{{'update/'.$movie->id}}"><button type="submit" class="btn btn-warning mt-1">edit M</button></a>
                </td>
            </tr>
      @endforeach
          
          </tbody>
        </table>
        
      </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>