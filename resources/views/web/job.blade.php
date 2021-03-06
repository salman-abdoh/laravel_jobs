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
<!--filter-->
<section class="py-2 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light"> فرز الوظائف حسب</h1>
    </div> </div>
    <div class="py-2 d-flex row row-cols-md-2 text-center container" style="direction: rtl;">
      <div class="col-md-6">
        <label for="state" class="form-label">الشركة</label>
        <select class="form-select" id="state" required="">
          <option value="">اختر الشركة...</option>
          <option value="road">رواد</option>
          <option value="google">جوجل</option>
          <option value="git">جيت هب</option>
          <option value="microsoft"> مايكروسوفت</option>
          <option value="pharma"> دوائك</option>
        </select>
        <div class="invalid-feedback">
          يرجى اختيار اسم منطقة صحيح.
        </div>
      </div>
    <div class="col-md-6">
      <label for="state" class="form-label">المدينه</label>
      <select class="form-select" id="state" required="">
        <option value="">اخر المدينه...</option>
        <option>صنعاء</option>
        <option>صنعاء</option>
        <option>صنعاء</option>
      </select>
      <div class="invalid-feedback">
        يرجى اختيار اسم منطقة صحيح.
      </div>
    </div>
 
  
  </div>
  <div class="album mt-2 pt-5 bg-light text-end" id="alb">
    <div class="container " id="con">

      <h1 class="headerh text-center mb-3 ">كل الوظائف </h1>
      <hr>
      <div id="job " class="row row-cols-1 row-cols-md-3 row-cols-xs-2 row-cols-sm-2 row-cols-lg-3    g-3">
        <div class="col job" id="road">
          <div id="kk " class="card shadow-sm p-1 h-140">
            <div id="mm" class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> مدرب بقووة</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة رواد </span>
                <p class="card-text">هذه الوضية تتطلب خبرات كافي. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col jop" id="microsoft">
          <div class="card shadow-sm p-1 h-140">
            <div class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> مبرمج سي بلس</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة مايكروسوفت </span>
                <p class="card-text">هذه الوضية تتطلب خبرات كافية في السي بلس. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col jop" id="github">
          <div class="card shadow-sm p-1 h-140">
            <div class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> مبرمج باور شل</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة جيت هب </span>
                <p class="card-text">هذه الوضية تتطلب خبرات كافي. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" id="pharma">
          <div class="card shadow-sm p-1 h-140">
            <div class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> مدير مبيعات</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة دوائك </span>
                <p class="card-text">هذه الوضية تتطلب خبرات صيدلانيه. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" id="many">
          <div class="card shadow-sm p-1 h-140">
            <div class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> مدير مالي</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة فلوسك </span>
                <p class="card-text">هذه الوضية تتطلب خبرات في المحاسبة. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" id="photo">
          <div class="card shadow-sm p-2 h-100">
            <div class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> مصور</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة لقطة </span>
                <p class="card-text">هذه الوضية تتطلب خبرة واعمال سابقة في التصوير. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" id="google">
          <div class="card shadow-sm p-1 h-140">
            <div class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> مبرمج ويب</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة جوجل </span>
                <p class="card-text">هذه الوضية تتطلب خبرات في لفات البرمجيه للويب. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" id="google">
          <div class="card shadow-sm p-1 h-140">
            <div class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> ادخال بيانات</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة جوجل </span>
                <p class="card-text">هذه الوضية تتطلب خبرات في الحاسوب والانظمه. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" id="google">
          <div class="card shadow-sm p-1 h-140">
            <div class="d-flex  align-items-center flex-direction-center text-center">
              <h1><i class="fas fa-briefcase"></i><br> ادخال بيانات</h1>
            </div>
            <div class="d-flex  align-items-center">

              <div class="card-body">
                <span class="text-warning">لدي شركة جوجل </span>
                <p class="card-text">هذه الوضية تتطلب خبرات في الحاسوب والانظمه. </p>
                <hr>
                <div class="d-flex  align-items-center">

                  <button type="button" class="btn btn-sm btn-outline-warning">عرض التفاصيل </button>

                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
</section>


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