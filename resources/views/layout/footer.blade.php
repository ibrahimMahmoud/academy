
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
        <script type="text/javascript" src="{{asset('js/froala_editor.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/align.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/code_beautifier.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/code_view.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/draggable.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/image.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/image_manager.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/link.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/lists.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/paragraph_format.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/paragraph_style.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/table.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/file.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/url.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/entities.min.js')}}"></script>

        <script type="text/javascript">
        $(function() { $('textarea').froalaEditor();});
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
       
