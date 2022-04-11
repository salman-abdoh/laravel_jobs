@extends('admin.layouts.master')
@section('content')
        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




            <!-- Multi Column with Form Separator -->
            <!-- Bordered Table -->
            <div class="card">
            <a href="/dashboard/about/create" class="btn btn-icon btn-outline-dribbble">    add new</a>          
              <div class="card-body">
                <div class="table-responsive text-nowrap">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th># </th>
                        <th>الاسم</th>
                        <th>الوصف</th>
                        <th>الصوره</th>
                        <th>الحاله</th>
                        <th>العمليات</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($data as $item)
                      <tr>
                        <td>{{$item->id}}</td>
                       
                        <td>{{$item->title}}</td>
                        <td>{{$item->describe}}</td>
                        <td><img class="img-fluid rounded" height="150px" width="150px" src="{{asset('images/'.$item->image)}}"></td>
                        <td>
                          @if($item->status==1)
                          <span class="badge bg-label-success me-1">مفعل</span>
                          @else
                          <span class="badge bg-label-danger me-1">موقف</span>
                          @endif
                        </td>
                        <td>

                          <form class="card-body" action="/dashboard/about/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/dashboard/about/{{ $item->id }}/edit" class="btn btn-icon btn-outline-dribbble">
                              <i class="tf-icons bx bx-edit-alt me-1"></i>
                            </a>
                            <button type="submit" class="btn btn-icon btn-outline-dribbble">
                              <i class="tf-icons bx bx-trash me-1"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @empty
                      <tr>no data yet</tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/ Bordered Table -->
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