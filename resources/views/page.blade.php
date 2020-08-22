<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $archaeology->title }}</title>
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
        <img src="../styles/img/logo.png" width="220px" alt="">
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
        <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="archaeology" href="/#archaeology"><span>الأمكان الأثرية</span></a></li>
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
        <div class="container">
            <div class="pageContain">

                  <div class="row">
                  <div class="pageImgContain">

                    
                    
                    @if(strpos($archaeology->image,'noImage.jpg') !== false)
                    <img style="max-height: 250px; min-height: 250px" src="../images/imgimg.jpg" alt="grid">
                    
                 
                        
                    @else
                    <img style="max-height: 250px; min-height: 250px" src="../images/{{$archaeology->image}}" alt="grid">
                    
                        
                    @endif
                    
                  
                  </div>
                  </div>

                  <div class="row">
                  <div class="pageDOCContain">
                  <div style="text-align: right" class="DOCPrevent">
                  <h1>{{ $archaeology->title }}</h1>
                  <span>{{ $archaeology->created_at }}</span>
                  <p>{{ $archaeology->description }}</p>
                  </div>
                  </div>
                  </div>

                  

                  @if (strpos($archaeology->location,'https://www.google.com/maps/embed') !== false)

                  <div class="row">
                    <div class="pageMap">
                    <!-- Map -->
                    <iframe src="{{ $archaeology->location }}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    </div>
                      
                  @else

                  <div class="row">
                    <div class="pageMap">
                    <H4>عذراً لا يتوفر المكان على الخارطة الان</H4>
                    </div>
                    </div>
                      
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
