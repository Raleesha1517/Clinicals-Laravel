


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

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                    {{session()->get('message')}}
                </div>
            @endif
 
            <div class="row">
                @foreach($post as $post)
                  <div class="col-md-3">
                    <div class="card mb-4" style="border-radius: 10px; border: 1px solid #ccc;">
                      <div class="card-body" style="background-color: rgb(244, 238, 238); color: rgb(19, 17, 17);">

                        <h3 class="card-title" style="color: black;align-item:center;text-align:center;">{{ $post->title }}</h3>
                        <h5 class="card-text">{{ limitWords($post->description, 20) }}</h5>

                        <p class="card-text"> Category : {{ $post->case }} / {{ $post->case_name }}</p>
                        <p class="card-text"> </p>
                        <!-- Display Images, PDFs, or Audio Files -->
                        <a href="{{url('post_details', $post->id)}}"><button type="button" class="btn btn-primary">Show More</button></a>
                        <a href="{{url('delete_post', $post->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div> 
             
              @php
              function limitWords($text, $limit) {
                  $words = explode(' ', $text, $limit + 1);
                  if (count($words) > $limit) {
                      array_pop($words);
                      return implode(' ', $words) . '...';
                  }
                  return implode(' ', $words);
              }
          @endphp

          
<script type="text/javascript">
    function confirmation(ev)
    {
        ev.preventDefault();

        var urlToRedirect=ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        swal({
            title:"Are you sure to delete this?",

            text: "You wont able to revert this delete",

            icon:"warning",

            buttons:true,
            dangerMode:true

        })

        .then((willCancel)=>
        {
            if(willCancel)
            {
                window.location.href=urlToRedirect;
            }
        })
    }
</script>

        
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