
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOGS</title>
</head>
<body>

<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a href="/breeds">
        <button type="button" class="btn btn-outline-info btn-lg">BREEDS</button>
    </a>  
  </div>
</nav>

@include('main.app')
@foreach($result as $dogs) 
    {{$dogs}}
@endforeach

</body>
</html>






