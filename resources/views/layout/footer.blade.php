

        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('assets/js/core/js.cookie.min.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>


        <script src="{{asset('assets/js/plugins/summernote/summernote.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>

        <script src="{{asset('assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('assets/js/pages/base_forms_wizard.js')}}"></script>

   @yield('jsCode')
        <script>
            $(function () {
                App.initHelpers(['summernote', 'ckeditor', 'datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs']);
            });
        </script>
        <script>
        // $('#endDate').hide();
        $('#CurrentlyWork').on('click',function(){

            $(this).closest('.step-tow-child').find("#endDate").toggle();

        });

        $(document).on('click','.CurrentlyWork',function(){

            $(this).closest('.step-tow-child').find("#endDate").toggle();

        });
        </script>
    </body>
</html>
