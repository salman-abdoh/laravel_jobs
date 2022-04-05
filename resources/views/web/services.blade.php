<!DOCTYPE html> 
<html>

<head>
    <title>توظيف</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="وظائف,شركات, توظيف, عمل">
    <meta name="author" content="salman">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link id="css"  rel="stylesheet" href="css/bootstrap.css">
    <link id="css"  rel="stylesheet" href="css/main.css">
    <link href="fonts/fontawesome-free-6.0.0-beta3-web/css/all.css" rel="stylesheet">
</head>
<body>
   
  <!--header-->
  @include('web.layout.header')
       <!--end header-->

        <!--start slides-->
      <div class="bd-slides" > 
       
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="الشريحة الأولى" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="الشريحة الثانية" class=""></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="الشريحة الثالثة" class=""></button>
          </div>
          <div class="slid1 carousel-inner">
            <div class="carousel-item active">
              <svg style="background-image: url(img/pexels-pixabay-356043.jpg); background-size:cover;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="80%" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الأولى" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="contaier buttm mb-2 ">
                 <h1 class="text-warning  " style="    width: fit-content;
                 margin: auto;
                 background-color: rgba(0, 0, 0, 0.233); padding:5px;">لاتتردد استلم عملك الان</h1>
                 <h5 class="text-light  " style="    width:fit-content;
                 margin: auto;
                 background-color: rgba(0, 0, 0, 0.233); margin-top: 10px ; padding:5px;">  هنا تجد وظيفتك المناسبه </h5>
                  </div>
        
                </svg>

            </div>
            <div class="slid2 carousel-item">
              <svg style="background-image: url(img/pexels-jeshootscom-834892.jpg); background-size:cover;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الثانية" preserveAspectRatio="xMidYMid slice" focusable="false">
                 
                <div class="contaier buttm mb-2 ">
                    <form class="d-flex">
                      
                        <button class="btn text-dark  btn-warning " style="width: 70%; margin:auto ;" type="submit"    width="70px" >ابحث عن وطيقتك الان</button>
                      </form>
                  </div>

                </svg>

            </div>
            <div class=" slid3 carousel-item">
              <svg style="background-image: url(img/pexels-pixabay-327540.jpg); background-size:cover;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الثالثة" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="contaier buttm mb-2 ">
               
                 <h5 class="text-warning  " style="    width:fit-content;
                 margin: auto;
                 background-color: rgba(0, 0, 0, 0.233); margin-bottom: 10px ; padding:5px;">نحن معك</h5>
                 <h1 class="text-light  " style="    width: fit-content;
                 margin: auto;
                 background-color: #ffc10729; padding:5px;"><i class="fas fa-briefcase"></i> توظيف</h1> 
                </div>
                 
                 
                </svg>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-warning text-warning" aria-hidden="true"><</span>
            <span class="visually-hidden">السابق</span>
          </button>
          <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-warning text-warning" aria-hidden="true">> </span>
            <span class="visually-hidden">التالي</span>
          </button>
        </div>
        </div>
   </div>
    <!--end slides-->
    
    <div class="container px-4 py-5" id="icon-grid" style="direction: rtl;">
      <h1 class="headerh text-center mb-3 border-bottom pb-3 ">خدماتنا  </h1>
  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex " style="flex-direction: column;text-align: center;">
          <div>
        <i class="bi text-muted flex-shrink-0 me-3 fas fa-briefcase"></i>
      </div>
          <div>
            <h4 class=" fw-bold mb-0 text-warning">التوضيف</h4>
            <p>نسعى الس  تقديم الوظائف بكل سهولة<br>نسعى لخدمتكم</p>
          </div>
        </div>
        <div class="col d-flex " style="flex-direction: column;text-align: center;">
          <div>
        <i class="bi text-muted flex-shrink-0 me-3 fas fa-briefcase"></i>
      </div>
          <div>
            <h4 class=" fw-bold mb-0 text-warning">عرض الوظاىف </h4>
            <p>نسعى الس  تقديم الوظائف بكل سهولة<br>نسعى لخدمتكم</p>
          </div>
        </div>
        <div class="col d-flex " style="flex-direction: column;text-align: center;">
          <div>
        <i class="bi text-muted flex-shrink-0 me-3 fas fa-briefcase"></i>
      </div>
          <div>
            <h4 class=" fw-bold mb-0 text-warning">التوضيف</h4>
            <p>نسعى الس  تقديم الوظائف بكل سهولة<br>نسعى لخدمتكم</p>
          </div>
        </div>
        <div class="col d-flex " style="flex-direction: column;text-align: center;">
          <div>
        <i class="bi text-muted flex-shrink-0 me-3 fas fa-briefcase"></i>
      </div>
          <div>
            <h4 class=" fw-bold mb-0 text-warning">التوضيف</h4>
            <p>نسعى الس  تقديم الوظائف بكل سهولة<br>نسعى لخدمتكم</p>
          </div>
        </div>
        <div class="col d-flex " style="flex-direction: column;text-align: center;">
          <div>
        <i class="bi text-muted flex-shrink-0 me-3 fas fa-briefcase"></i>
      </div>
          <div>
            <h4 class=" fw-bold mb-0 text-warning">التوضيف</h4>
            <p>نسعى الس  تقديم الوظائف بكل سهولة<br>نسعى لخدمتكم</p>
          </div>
        </div>
        <div class="col d-flex " style="flex-direction: column;text-align: center;">
          <div>
        <i class="bi text-muted flex-shrink-0 me-3 fas fa-briefcase"></i>
      </div>
          <div>
            <h4 class=" fw-bold mb-0 text-warning">عرض الوظاىف </h4>
            <p>نسعى الس  تقديم الوظائف بكل سهولة<br>نسعى لخدمتكم</p>
          </div>
        </div>
        <div class="col d-flex " style="flex-direction: column;text-align: center;">
          <div>
        <i class="bi text-muted flex-shrink-0 me-3 fas fa-briefcase"></i>
      </div>
          <div>
            <h4 class=" fw-bold mb-0 text-warning">التوضيف</h4>
            <p>نسعى الس  تقديم الوظائف بكل سهولة<br>نسعى لخدمتكم</p>
          </div>
        </div>
        <div class="col d-flex " style="flex-direction: column;text-align: center;">
          <div>
        <i class="bi text-muted flex-shrink-0 me-3 fas fa-briefcase"></i>
      </div>
          <div>
            <h4 class=" fw-bold mb-0 text-warning">التوضيف</h4>
            <p>نسعى الس  تقديم الوظائف بكل سهولة<br>نسعى لخدمتكم</p>
          </div>
        </div>
        
      </div>
    </div>
        <!--footetr-->
        @include('web.layout.footer')
           <!--End footetr-->
        <!--java script file-->
        <script src="javascript/jquery-3.6.0.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
        <script src="javascript/app.js"></script>
    </body>
    </div>
    </html>