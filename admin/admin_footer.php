<!-- <footer class="content-footer footer bg-footer-theme mt-5">
  <div class="container-xxl d-flex flex-wrap justify-content-center py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      Copyright©
      <script>
        document.write(new Date().getFullYear());
      </script>
      - All rights reserved by JKKNIU Conference team
    </div>
    <div>
    </div>
  </div>
</footer> -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Page JS -->
<script src="assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>


<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

<script>
  $(document).ready(function() {
    $('#table').DataTable();
  });
</script>
<script src="../ckeditor/ckeditor.js"></script>
<script>
  // Initialize CKEditor

  CKEDITOR.replace('long_desc', {
    width: "100%",
    height: "200px",
    // filebrowserUploadUrl: 'upload.php'
  });
</script>
<!-- <script>
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 200
    })
  });
</script> -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>