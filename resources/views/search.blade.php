<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $q }}</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
</head>
<body>
  <!-- Toggle btn -->
  <div class="toggleBtn" onclick="toggleBtn()">
    <i class="fas fa-bars"></i>
  </div>
  <header id="myHeader">

    <div class="sidePostion">
      <div class="headerPreventflex">
        <div class="headerFlex">

      <div class="upperHeader">
      <div class="logo">
        <img src="styles/img/logo2.png" width="220px" alt="">
        {{-- <a href="#">Logo</a> --}}
      </div>
      <div  class="prventForm">
        <form action="/search" class="searchHeader my-2 my-lg-0">
            @csrf
            <input name="q" id="q" style="width: 200px; text-align: right " class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="بحث">
            <button  class="btn btnSearch" type="submit"><i class="fas fa-search"></i></button>
          </form>
    </div>
  </div>
      <hr class="hrHeader">
      <!-- Menu -->
      <div class="headerSpace">
      <div class="menu">
      <ul>
        <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="sideDoc" href="/"><span>الرئيسية</span></a></li>
        <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="governorates" href="/#governorates"><span>المحافظات</span></a></li>
        <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="archaeology" href="/#archaeology"><span>الأماكن الأثرية</span></a></li>
        <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="about" href="/#about"><span>حول المشروع</span></a></li>
      </ul>
    </div>

      

      <!-- brightness bar -->
      <div class="copybright">
        <hr class="hrHeader">
        <div class="col-md-12">
      <div class="brightness-box">
        <i class="far fa-sun"></i>
        <input type="range" min="10" max="100" value="100" id="range">
        <i class="fas fa-sun"></i>
      </div>
      <!-- copyright -->
      <div class="copyRight">
        <p>© 2020 All Rights Reserved</p>
      </div>
      <div class="copyRight">
        <p>info@codeforiraq.org</p>
      </div>
    </div>
  </div>
  </div>

</div>
 </div>
</div>

</header>
<section class="sideDoc" id="sideDoc">
<div class="preventSide">
    <div class="page">


        {{-- @if(session()->has('s'))
        <div class="alert alert-success">
            {{ session()->get('s') }}
        </div>
        @endif --}}
    <!-- governorates -->
        <div class="container">
        <div class="row">

            @if ($archaeology->count()==0)

            <div class="sliderPostion">
                <h3 style="color: black">  عذراً لاتوجد نتائج للبحث عن </h3>
                <h2 style="color: black">"{{$q}}"</h2>
            </div>
      
                
            @else
            @foreach ($archaeology as $item)
          
            <div class="col-md-4">
              <div class="govGrid">
                <a href="/show/{{$item->id}}" >
                  @if(strpos($item->image,'noImage.jpg') !== false)
                  <img style="max-height: 250px; min-height: 250px" src="../images/imgimg.jpg" alt="grid">
                  
               
                      
                  @else
                  <img style="max-height: 250px; min-height: 250px" src="../images/{{$item->image}}" alt="grid">
                  
                      
                  @endif
                <div class="absGridTitle">
                <h2>{{$item->title}}</h2>
                </div>
                </a>
              </div>
          </div>
            @endforeach
            @endif
          
        
        </div>
        </div>
    </div>
  
  </div>
  </section>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- My javascript -->
    <script src="../js/jsscript.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/script.js"></script>
   
</body>
</html>
