

        </div>
        <!-- END Page Container -->

        OneUI Core JS: jQuery, Bootstr
            <!-- ap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
       
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
        <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('assets/js/core/js.cookie.min.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>


        <script src="{{asset('assets/js/plugins/summernote/summernote.min.js')}}"></script>
        <!-- <script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script> -->

        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/froala_editor.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/align.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/code_beautifier.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/code_view.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/draggable.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/image.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/image_manager.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/link.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/lists.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/paragraph_format.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/paragraph_style.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/table.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/file.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/url.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('froala_editor/js/plugins/entities.min.js')}}"></script>
        <!-- <script type="text/javascript" src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script> -->
        <script type="text/javascript" src="{{asset('assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

        <script src="{{asset('assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <!-- Page JS Code wizard -->
        
        <script src="{{asset('assets/js/pages/base_forms_wizard.js')}}"></script>
        <script>
           
            $(function(){
              $.FroalaEditor.DefineIcon('imageInfo', {NAME: 'info'});
              $.FroalaEditor.RegisterCommand('imageInfo', {
                title: 'Info',
                focus: false,
                undo: false,
                refreshAfterCallback: false,
                callback: function () {
                  var $img = this.image.get();
                  alert($img.attr('src'));
                }
              });

              // $('textarea').froalaEditor({
              //   imageEditButtons: ['imageDisplay', 'imageAlign', 'imageInfo', 'imageRemove']
              // });
               
            

            });

     
          </script>
        <!-- date piker libirary -->
        
        <script>
           $('#CurrentlyWork').on('click',function(){
                $('#endDate').toggle();
            });
           
            $('#CurrentlyWork').on('click',function(){
                $(this).closest('.step-tow-child').find("#endDate").toggle();
            });
            $(document).on('click','.CurrentlyWork',function(){
                $(this).closest('.step-tow-child').find("#endDate").toggle();
            });
            
            
        
          //   $(document).on("click", "#start_date", function(){
          //       $(this).datepicker();
          //   });
            
          // $(document).on("click", ".datepicker", function(){
          //       $(this).datepicker();
          //   });


        </script>
        
        @yield('jsCode')
    </body>

 
</html>
