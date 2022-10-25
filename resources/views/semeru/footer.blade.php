  <!-- jQuery -->
  <script src="{{ asset('public/semeru/dist/js/jquery-3.js') }}"></script>
  <script src="{{ asset('public/semeru/dist/js/jquery-ui.min.js') }}"></script>
  {{-- <script src="{{ asset('public/semeru/plugins/jquery/jquery.min.js') }}"></script> --}}
  <!-- Bootstrap 4 -->
  <script src="{{ asset('public/semeru/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('public/semeru/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('public/semeru/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('public/semeru/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(".preloader2").fadeOut();
      $(function() {
          $("#tabelpasienterpilih").DataTable({
              "responsive": true,
              "lengthChange": false,
              "pageLength": 100,
              "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          });
      });
     
    function batalpilih()
    {
        $("#tabelpasien").slideToggle("slow");
        document.getElementById("pasienterpilih").style.display = "none";
    }
    function tstload(){
        spinner = $('#loader2');
        spinner.show();
    }
</script>
