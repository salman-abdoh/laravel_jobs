@extends('admin.layouts.master')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">

  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">


    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




    <!-- Multi Column with Form Separator -->
    <div class="card mb-12">
      <h5 class="card-header">انشاء جديد</h5>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      <form class="card-body" action="/dashboard/about" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
          <div class="col-md-12">
            <label class="form-label" for="multicol-username">العنوان </label>
            <input name="title" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
          </div>

          <div class="col-md-12">
            <label class="form-label" for="multicol-username"> الوصف </label>
            <input name="describe" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
          </div>



          <div class="col-md-6">
            <label class="form-label" for="multicol-email">الصورة</label>
            <div class="input-group input-group-merge">
              <input name="image" type="file" class="form-control" aria-describedby="multicol-email2" />

            </div>
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


        <div class="pt-4">
          <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
          <button type="reset" class="btn btn-label-secondary">Cancel</button>
        </div>
      </form>
    </div>






  </div>
  <!-- / Content -->




  <!-- Footer -->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        © <script>
          document.write(new Date().getFullYear())
        </script>
        , made with ❤️ by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
      </div>
      <div>

        <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>


        <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

      </div>
    </div>
  </footer>
  <!-- / Footer -->


  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
@endsection
