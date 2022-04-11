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
<body class="text-center">
    
    <main class="form-signin bg-dark text-light text-center  " style="direction: rtl;">
        <div class=" align-items-center flex-direction-center text-warning text-center">
         <a href="{{url('/')}}" class="text-warning text-center " style="text-decoration: none;"><h1 class="m-5">
        
         <i class="fas fa-briefcase"></i><br> توضيف</h1></div></a>   
      <form action="/call" method="POST">
      @csrf  
       <h1>تواصل معنا </h1>
        
      
       
        <div class="form-floating  text-dark " style="direction: rtl;">
           
            <input type="text" class="form-control " name="name" style="direction: rtl;" id="floatingInputfname" placeholder="name">
            <label for="floatingInputfname">الاسم  </label><br>
            </div>
            <div class="form-floating text-dark ">
            <input type="number" class="form-control " name="phone" id="floatingInputphone" placeholder="777777777">
            <label for="floatingInputphone"> رقم الهاتف</label><br></div>
            <div class="form-floating text-dark ">
          <input type="email" class="form-control " name="email" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">البريد الالكتروني</label></div>
       <br>
        <div class="form-floating text-dark ">
        <input type="text" class="form-control " name="messege" id="floatingInput" placeholder="name@example.com">
          <!-- <textarea type="text"class="form-control " style="height: 200px;" id="floating masge" name="fname2"  placeholder="الرسالة"></textarea><br> -->
          <label for="floatingPassword" style="direction: rtl;"> الرسالة</label>
        </div>
   
        <div class="col-md-6">
            <div class="form-password-toggle">
              <label class="form-label" for="multicol-confirm-password">تفعيل العنوان</label>
              <div class="input-group input-group-merge">
                <label class="switch">
                  <input name="status" value=1 type="checkbox" checked class="switch-input" />
                  <span class="switch-toggle-slider">
                    <span class="switch-on"></span>
                    <span class="switch-off"></span>
                  </span>
                  <span class="switch-label">مفعل</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      
        <button class="w-100 btn btn-lg btn-warning" type="submit">ارسال</button><br>
        
        <p class="btn btn-outline-light text-warning mt-4 w-100">او من خلال</p>
        <div class="row px-xl-5 px-sm-4 px-3 mt-2">
          <div class="col-3 ms-auto px-1">
            <a class="btn btn-outline-warning w-100" href="javascript:;">
              <i class="fab fa-facebook"></i>
            </a>
          </div>
          <div class="col-3 px-1">
            <a class="btn btn-outline-warning w-100" href="javascript:;">
              <i class="fab fa-whatsapp"></i>
            </a>
          </div>
          <div class="col-3 me-auto px-1">
            <a class="btn btn-outline-warning w-100" href="javascript:;">
              <i class="fab fa-twitter"></i>
             
            </a>
          </div>
          
        </div>
        <p class="mt-5 mb-3 text-muted">salman2022</p>
      </form>
      
    </main>
   
           
        
      
    <script src="javascript/jquery-3.6.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/app.js"></script>
    </body></html>