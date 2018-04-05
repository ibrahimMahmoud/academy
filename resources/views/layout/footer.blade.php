      
        <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('assets/js/core/js.cookie.min.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>

        <!-- Pages Plugins -->
        <script src="{{asset('assets/js/plugins/slick/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/chartjs/Chart.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/summernote/summernote.min.js')}}"></script>


        <!-- Pages JS Custom -->
        <script src="{{asset('assets/js/pages/base_tables_datatables.js')}}"></script>
        <script src="{{asset('assets/js/pages/base_pages_dashboard.js')}}"></script>

        <script type="text/javascript">
          $(function () {
              App.initHelpers(['datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs', 'summernote']);
          });
        </script>
        <script>
        // $('#endDate').hide();
            $("#CurrentlyWork").click(function(){
                $("#endDate").toggle();
            });
      </script>
       @yield('jsCode')