<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>المحافظات</title>
        <link rel="stylesheet" href="styles/styles.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="styles/bootstrap.min.css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
<body>
    <!-- governorates -->
<div class="governorates">
    <div class="container">
    <div class="row">
      @foreach ($governorates as $item)
      <div class="col-md-4">
        <div class="govGrid">
          <a href="/show/{{$item->id}}" >
          <img style="max-height: 250px; min-height: 250px" src="images/{{$item->image}}" alt="grid">
          <div class="absGridTitle">
          <h2>{{$item->title}}</h2>
          </div>
          </a>
        </div>
    </div>
      @endforeach
    
    </div>
    </div>
    </div>
    <button id="backtohome"><a href="/"><i class="fas fa-home"></i></a></button>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>