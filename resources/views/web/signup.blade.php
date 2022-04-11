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
          <a href="{{url('/')}}" class="text-warning text-center " style="text-decoration: none;"><h1 class="m-5"><i class="fas fa-briefcase"></i><br> توضيف</h1></div></a>   
          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
          <form id="formAuthentication"  action="{{ route('save_user') }}" method="POST">
      @csrf
       <h1>التسجيل</h1>
        
    
        <div class="form-floating  text-dark " style="direction: rtl;">
           
            <input type="text" name="name" class="form-control " style="direction: rtl;" id="floatingInputfname" placeholder="name@example.com">
            <label for="floatingInputfname">الاسم  </label><br>
            <div class="form-floating text-dark ">
            <input type="text" name="phone" class="form-control " id="floatingInputphone" placeholder="name@example.com">
            <label for="floatingInputphone"> رقم الهاتف</label><br></div>
            <div class="form-floating text-dark ">
          <input type="email" name="email" class="form-control " id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">البريد الالكتروني</label></div>
        </div><br>
        <div class="form-floating text-dark ">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword" style="direction: rtl;">كلمة السر</label>
        </div>
   
        
        <button class="w-100 btn btn-lg btn-warning" type="submit">ارسال</button>
        <p class="mt-5 mb-3 text-muted">salman2022</p>
      </form>
    </main>
   
           
        
      
    <script src="javascript/jquery-3.6.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/app.js"></script>
    </body></html>