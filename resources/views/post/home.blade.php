


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clinical Group 6</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('sidebar')

      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('navbar')

        <div class="main-panel">
        <div class="content-wrapper">



          <a class="nav-link btn btn-info create-new-button text-light" style="margin: 10px;padding:10px "  href="{{url( 'post_page' )}}">+ Upload New Material</a>

  <h2>Long Cases</h2>
          <div class="row">
            @foreach($options as $option)
                <div class="col-md-3">
                    <div class="card mb-4" style="border-radius: 10px; border: 1px solid #ccc;">
                        <div class="card-body" style="background-color: rgb(244, 238, 238); color: rgb(19, 17, 17);">
                            <h3 class="card-title" style="color: black; align-item:center; text-align:center;">{{ $option->text }}</h3>
                            <a href="{{ url($option->value) }}"><button type="button" class="btn btn-primary">Other Posts</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

  <h2>Short Cases</h2>
  <div class="row">
    @foreach($optionsSet2 as $options)
        <div class="col-md-3">
            <div class="card mb-4" style="border-radius: 10px; border: 1px solid #ccc;">
                <div class="card-body" style="background-color: rgb(244, 238, 238); color: rgb(19, 17, 17);">
                    <h3 class="card-title" style="color: black; align-item:center; text-align:center;">{{ $options->text }}</h3>
                    <a href="{{ url($options->value) }}"><button type="button" class="btn btn-primary" style="align-item:center; text-align:center;">Other Posts</button></a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<h2>Other</h2>
<div class="row">
      <div class="col-md-3">
          <div class="card mb-4" style="border-radius: 10px; border: 1px solid #ccc;">
              <div class="card-body" style="background-color: rgb(244, 238, 238); color: rgb(19, 17, 17);">
                  <h3 class="card-title" style="color: black; align-item:center; text-align:center;">Other</h3>
                  <a href="{{ url('/other') }}"><button type="button" class="btn btn-primary" style="align-item:center; text-align:center;">Other Posts</button></a>
              </div>
          </div>
      </div>
</div>





        
            
              



        
        </div>
        </div>


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>