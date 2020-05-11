<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آثار</title>
    <link rel="stylesheet" href="styles/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
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
          <img src="styles/img/logo.png" width="170px" alt="">
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
          <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="sideDoc" href="#"><span>الرئيسية</span></a></li>
          <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="governorates" href="#"><span>المحافظات</span></a></li>
          <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="archaeology" href="#"><span>الأمكان الأثرية</span></a></li>
          <li style="padding-right: 3%" class="liSmooth col-md-12"><a data-value="about" href="#"><span>حول المشروع</span></a></li>
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
  <!-- slideDoc -->
      <div class="slideDoc">
        <!-- slider -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <div class="sliderPostion">
              <div class="col-md-12">
                
              <h1>آثار</h1>
              <p>افضل موقع<span> آثار </span>في العراق</p>
            </div>

            </div>  





            
              {{-- <div class="container" style="min-width: 100%"> --}}
                <div class="carousel slide" id="main-carousel" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#main-carousel" data-slide-to="1"></li>
                    <li data-target="#main-carousel" data-slide-to="2"></li>
                    <li data-target="#main-carousel" data-slide-to="3"></li>
                    <li data-target="#main-carousel" data-slide-to="4"></li>
                  </ol><!-- /.carousel-indicators -->
                  
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid" src="https://s19.postimg.cc/qzj5uncgj/slide1.jpg" alt="">
                      <div class="carousel-caption d-none d-md-block">
                        <h1>بغداد</h1>
                        <p>بغداد هي عاصمة العراق وهي المركز الاقتصادي والإداري والتربوي للبلاد ، بنيت في العصر العباسي. كما تحتوي على العديد من الآثار الإسلامية.</p>

                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="https://s19.postimg.cc/lmubh3h0j/slide2.jpg"  alt="">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>نينوى</h3>
                        <p>نينوى هي ثاني أكبر مدينة في العراق تقع في شمال البلاد ، وقد نشأت في العصر الآشوري وتضم العديد من المعالم التاريخية والإسلامية التي سكنت نينوى قبل 6000 سنة قبل الميلاد.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="https://s19.postimg.cc/99hh9lr5v/slide3.jpg" alt="">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>البصرة</h3>
                        <p>البصرة هي ثالث أكبر مدينة في العراق ، وتعتبر البصرة العاصمة الاقتصادية للعراق ، والتي بدورها مدينة قديمة بنيت في زمن الخلافة الإسلامية ، ويعتقد البعض أن حدائق عدن حيث ينحدر آدم تقع في مدينة القرنة الواقعة قرب البصرة</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="https://s19.postimg.cc/nenabzsnn/slide4.jpg" alt="" class="d-block img-fluid">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>كربلاء المقدسة</h3>
                        <p>محافظة عراقية تقع في الفرات الاوسط ، تعد من اهم المدن الدينية في العراق لانها تضم ضريح الامام الحسين عليه السلام. يعود تاريخ المدينة إلى العهد البابلي وكانت هذه المنطقة مقبرة للنصارى قبل الفتح الإسلامي، ويرى بعض الباحثين أن كلمة كربلاء يعني (قرب الاله) وهي كلمة اصلها من البابلية</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="https://s19.postimg.cc/nenabzsnn/slide4.jpg" alt="" class="d-block img-fluid">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>أربيل</h3>
                        <p>وهي رابع أكبر مدينة من حيث المساحة في العراق بعد بغداد والبصرة والموصل والسادسة من حيث عدد السكان . تُعد أربيل من أقدم المدن التي استمر بها الإستيطان البشريّ بالعالم .  تأسست سنة 2300 قبل الميلاد تقريباً على يد السومريين.</p>
                      </div>
                    </div>
                  </div>
                  <!-- /.carousel-inner -->
                  
                  {{-- <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only" aria-hidden="true">Prev</span>
                  </a>
                  <a href="#main-carousel" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only" aria-hidden="true">Next</span>
                  </a> --}}
                </div><!-- /.carousel -->
              {{-- </div><!-- /.container --> --}}


























            {{-- <div class="carousel-item active">
              <img class="d-block w-100" src="styles/img/paralla2x.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="styles/img/paralla2x.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="styles/img/paralla2x.jpg" alt="Third slide">
            </div> --}}
          </div>
        </div>
        <!-- wave button -->
        <button class="wave">
          <i class="fas fa-arrow-down"></i>
        </button>

    </div>
<!-- governorates -->
<div class="governorates" id="governorates">
<div class="container">
<div class="row">
  <div class="col-md-12">
      <div class="govTitle">
      <h1>المحافظات</h1>
      <hr class="gov-longLine">
      <hr class="gov-miniLine">
      </div>
    </div>
  </div>
<div class="row">

  @foreach ($governorates as $item)
  <div class="col-md-4">
    <div class="govGrid">
    <a href="/show/{{$item->id}}">
      <img style="max-height: 250px; min-height: 250px" src="images/{{$item->image}}" alt="grid">
      <div class="absGridTitle">
      <h2>{{$item->title}}</h2>
      </div>
      </a>
    </div>
</div>
  @endforeach
    


</div>
<!-- More -->
<div class="row">
  <div class="col-md-12">
    <div  class="more">
      <a href="/governorates"> <i class="fas fa-arrow-left"></i>عرض كل المحافظات</a> 
    
    </div>
  </div>
</div>
</div>
</div>

<!-- ALL ARCHAEOLOGY -->
<div class="governorates" id="archaeology">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="govTitle">
        <h1>الأماكن الأثرية</h1>
        <hr class="gov-longLine">
        <hr class="gov-miniLine">
        </div>
      </div>
    </div>
  <div class="row">
  
    @foreach ($archaeology as $item)
    <div class="col-md-4">
      <div class="govGrid">
      <a href="/show/{{$item->id}}">
        <img style="max-height: 250px; min-height: 250px" src="images/{{$item->image}}" alt="grid">
        <div class="absGridTitle">
        <h2>{{$item->title}}</h2>
        </div>
        </a>
      </div>
  </div>
    @endforeach
     
     
  
  </div>
  <!-- More -->
  <div class="row">
    <div class="col-md-12">
      <div class="more">
        <a href="/archaeology"><i class="fas fa-arrow-left"></i>عرض كل الأماكن الأثرية</a> 
      </div>
    </div>
  </div>
  </div>
  </div>

  <!-- About -->
  <div class="governorates" id="about">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="govTitle">
          <h1>حول المشروع</h1>
          <hr class="gov-longLine">
          <hr class="gov-miniLine">
          </div>
        </div>
      </div>

      
     
      <div class="govTitle">
        <h3 >آثار</h3>
        <p style="padding-left: 5%;padding-right: 5%">يحتوي على جميع المواقع والمدن الأثرية في العراق مع تفاصيل والموقع  على الخريطة بشكل يسهل على الدارسين والباحثين والزوار التعرف عليها وعلى اماكنها </p>
 
        </div>
      
    <div class="row">

      <div class="col-sm-6">
        <div class="aboutCard">
            <img src="styles/img/Mustafa.jpg" alt="grid">
            <div class="aboutCardTect">
              <div class="aboutCT">
                      <h4>Mustafa Abdallah</h4>
                      <span>UI UX Designers / Website Designers</span>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="aboutCard">
            <img src="styles/img/Fahad.jpg" alt="grid">
            <div class="aboutCardTect">
              <div class="aboutCT">
                      <h4>Fahad Mahfoth</h4>
                      <span>Web developer</span>
              </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-sm-6">
        <div class="aboutCard">
            <img src="styles/img/user.jpg" alt="grid">
            <div class="aboutCardTect">
              <div class="aboutCT">
                      <h4>Lubna Ahmed</h4>
                      <span>Information gathering</span>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="aboutCard">
            <img src="styles/img/user.jpg" alt="grid">
            <div class="aboutCardTect">
              <div class="aboutCT">
                      <h4>Farah Ali</h4>
                      <span>Information gathering</span>
              </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-sm-6">
        <div class="aboutCard">
            <img src="styles/img/user.jpg" alt="grid">
            <div class="aboutCardTect">
              <div class="aboutCT">
                      <h4>Ahmed Rajab</h4>
                      <span>Information gathering</span>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="aboutCard">
            <img src="styles/img/Taha.jpg" alt="grid">
            <div class="aboutCardTect">
              <div class="aboutCT">
                      <h4>Taha Ammar</h4>
                      <span>Manager of Project</span>
              </div>
          </div>
        </div>
      </div>


    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="aboutCard">
            <img src="styles/img/Essa.jpg" alt="grid">
            <div class="aboutCardTect">
              <div class="aboutCT">
                      <h4>Muhammed Essa</h4>
                      <span>Manager of Code for Iraq</span>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="aboutCard">
            <img src="styles/img/code.jpg" alt="grid">
            <div class="aboutCardTect">
              <div class="aboutCT">
                      <h4>Code for Iraq</h4>
              </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    </div>  

  </div>
  </section>


     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- My javascript -->
    <script src="js/jsscript.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
   
</body>
</html>