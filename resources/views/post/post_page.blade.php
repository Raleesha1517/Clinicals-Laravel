


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
                    {{session()->get('message')}}
                </div>
            @endif

            <h1>Add New Post</h1>

            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                @csrf <!-- Laravel CSRF token -->
        
                
                <!-- Case Type Dropdown -->
                <div class="form-group">
                  <label for="caseType" class="text-light">Select Case Type:</label>
                  <div class="form-check">
                      <input type="radio" class="form-check-input" id="shortCase" name="caseType" value="Short Case">
                      <label class="form-check-label text-light" for="shortCase">Short Case</label>
                  </div>
                  <div class="form-check">
                      <input type="radio" class="form-check-input" id="longCase" name="caseType" value="Long Case">
                      <label class="form-check-label text-light" for="longCase">Long Case</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="other" name="caseType" value="other">
                    <label class="form-check-label text-light" for="other">Other</label>
                </div>
              </div>
              
              <!-- Short Cases Dropdown -->
              <div id="shortCaseOptions" class="form-group" style="display: none;" >
                  <label for="shortCases" class="text-light">Select Short Case:</label>
                  <select class="form-control text-light" id="shortCases" name="shortCases">
                    <option value="Ubiquitous Lumps" class="text-light">Ubiquitous Lumps</option>
                    <option value="Skin & Subcutaneous Tissue Disorders" class="text-light">Skin & Subcutaneous Tissue Disorders</option>
                    <option value="Herniae" class="text-light">Herniae</option>
                    <option value="Scrotal Lumps" class="text-light">Scrotal Lumps</option>
                    <option value="Facial Ulcers" class="text-light">Facial Ulcers</option>
                    <option value="Mouth Ulcers" class="text-light">Mouth Ulcers</option>
                    <option value="Neck Lumps" class="text-light">Neck Lumps</option>
                    <option value="Parotid Lump" class="text-light">Parotid Lump</option>
                    <option value="Submandibular Lump" class="text-light">Submandibular Lump</option>
                    <option value="Thyroid Lump" class="text-light">Thyroid Lump</option>
                    <option value="Breast Lump" class="text-light">Breast Lump</option>
                    <option value="Abdominal Examination" class="text-light">Abdominal Examination</option>
                    <option value="Stomas" class="text-light">Stomas</option>
                    <option value="RIF/LIF Mass" class="text-light">RIF/LIF Mass</option>
                    <option value="Vascular Malformations" class="text-light">Vascular Malformations</option>
                    <option value="Varicose Veins" class="text-light">Varicose Veins</option>
                    <option value="Chronic Lower Limb Ulceration + Gangrene" class="text-light">Chronic Lower Limb Ulceration + Gangrene</option>
                    <option value="Lower Limb Swelling" class="text-light">Lower Limb Swelling</option>
                    <option value="Bony Lumps" class="text-light">Bony Lumps</option>
                    <option value="Popliteal Fossa Lumps" class="text-light">Popliteal Fossa Lumps</option>
                    <option value="Fractures + External Fixators + Pop Casts" class="text-light">Fractures + External Fixators + Pop Casts</option>
                    <option value="Amputations - LL" class="text-light">Amputations - LL</option>
                    <option value="Hand Disorders" class="text-light">Hand Disorders</option>
                    <option value="Foot Disorders" class="text-light">Foot Disorders</option>
                      <!-- Add more options as needed for short cases -->
                  </select>
              </div>
              
              <!-- Long Cases Dropdown -->
              <div id="longCaseOptions" class="form-group" style="display: none;">
                  <label for="longCases" class="text-light">Select Long Case:</label>
                  <select class="form-control text-light" id="longCases" name="longCases">
                    <option value="Dysphagia" class="text-light">Dysphagia</option>
                    <option value="Epigastric Pain and Dyspepsia" class="text-light">Epigastric Pain and Dyspepsia</option>
                    <option value="RHC Pain" class="text-light">RHC Pain</option>
                    <option value="Obstructive Jaundice" class="text-light">Obstructive Jaundice</option>
                    <option value="PR Bleeding" class="text-light">PR Bleeding</option>
                    <option value="Alteration of Bowel Habits" class="text-light">Alteration of Bowel Habits</option>
                    <option value="Thyroid Lumps" class="text-light">Thyroid Lumps</option>
                    <option value="Breast Lumps" class="text-light">Breast Lumps</option>
                    <option value="Haematuria" class="text-light">Haematuria</option>
                    <option value="LUTS" class="text-light">LUTS</option>
                    <option value="PVD" class="text-light">PVD</option>
                      <!-- Add more options as needed for long cases -->
                  </select>
              </div>

              <div id="otherOptions" class="form-group" style="display: none;">
                <label for="other" class="text-light">Mention the Specific Area:</label>
                <textarea class="form-control text-light" id="other" name="other" rows="3" ></textarea>
            </div>
              
            <script>
              document.addEventListener('DOMContentLoaded', function () {
                  var shortCaseOptions = document.getElementById('shortCaseOptions');
                  var longCaseOptions = document.getElementById('longCaseOptions');
                  var otherOptions = document.getElementById('otherOptions');
          
                  document.querySelectorAll('input[name="caseType"]').forEach(function (radio) {
                      radio.addEventListener('change', function () {
                          if (this.value === 'Short Case') {
                              shortCaseOptions.style.display = 'block';
                              longCaseOptions.style.display = 'none';
                              otherOptions.style.display = 'none';
                          } else if (this.value === 'Long Case') {
                              shortCaseOptions.style.display = 'none';
                              longCaseOptions.style.display = 'block';
                              otherOptions.style.display = 'none';
                          } else if (this.value === 'other') {
                              shortCaseOptions.style.display = 'none';
                              longCaseOptions.style.display = 'none';
                              otherOptions.style.display = 'block';
                          }
                      });
                  });
              });
          </script>
              

                <div class="form-group">
                    <label for="title" class="text-light">Title:</label>
                    <textarea class="form-control text-light" id="title" name="title" rows="3" ></textarea>
                  </div>
        
                <!-- Description -->
                <div class="form-group">
                  <label for="description" class="text-light">Description:</label>
                  <textarea class="form-control text-light" id="description" name="description" rows="3"></textarea>
                </div>
        
                <!-- URL -->
                <div class="form-group">
                  <label for="url" class="text-light">URL:</label>
                  <input type="text" class="form-control text-light" id="url" name="url">
                </div>
        
                <!-- File Uploads -->
                <div class="form-group">
                  <label for="file" class="text-light">Upload File (Image/PDF/Audio/Video):</label>
                  <input type="file" class="form-control" id="file" name="file">
                </div>

                <div class="form-group">
                  <label for="creator_name" class="text-light">Creator Name</label>
                  <textarea class="form-control text-light" id="creator_name" name="creator_name" rows="3"></textarea>
                </div>
        
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        <!-- partial -->
  
        
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