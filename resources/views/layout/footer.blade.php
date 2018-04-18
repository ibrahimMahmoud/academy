

        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstr
            ap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
       
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  -->
        
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

        <!-- date piker libirary -->
   
        
        <script>
           $(function() { $('textarea').froalaEditor();});
           $(function () {
               App.initHelpers(['datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs', 'summernote']);
           });
        </script>
        
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

        
            $("#datepicker" ).datepicker({
                format: 'dd-mm-yyyy',
                startDate: '-3d'
            });
        </script>

       <script>
          // $(function() {
          //   $('textarea')
          //     .froalaeditor({
          //       // Set the image upload parameter.
          //       imageUploadParam: 'image',
         
          //       // Set the image upload URL.
          //       imageUploadURL: '{{URL::to('/api/upload/frolla')}}',
         
          //       // Additional upload params.
          //       imageUploadParams: {id: 'description'},
         
          //       // Set request type.
          //       imageUploadMethod: 'POST',
         
          //       // Set max image size to 5MB.
          //       imageMaxSize: 5 * 1024 * 1024,
         
          //       // Allow to upload PNG and JPG.
          //       imageAllowedTypes: ['jpeg', 'jpg', 'png']
          //     })
          //     .on('froalaEditor.image.beforeUpload', function (e, editor, images) {
          //       // Return false if you want to stop the image upload.
          //     })
          //     .on('froalaEditor.image.uploaded', function (e, editor, response) {
          //       // Image was uploaded to the server.
          //       console.log('image uploaded done');

          //     })
          //     .on('froalaEditor.image.inserted', function (e, editor, $img, response) {
          //       // Image was inserted in the editor.
          //       console.log('should be see your image in editor');

          //     })
          //     .on('froalaEditor.image.replaced', function (e, editor, $img, response) {
          //       // Image was replaced in the editor.
          //       console.log('image replace done');

          //     })
          //     .on('froalaEditor.image.error', function (e, editor, error, response) {
          //       // Bad link.
          //       if (error.code == 1) { ... }
         
          //       // No link in upload response.
          //       else if (error.code == 2) { ... }
         
          //       // Error during image upload.
          //       else if (error.code == 3) { ... }
         
          //       // Parsing response failed.
          //       else if (error.code == 4) { ... }
         
          //       // Image too text-large.
          //       else if (error.code == 5) { ... }
         
          //       // Invalid image type.
          //       else if (error.code == 6) { ... }
         
          //       // Image can be uploaded only to same domain in IE 8 and IE 9.
          //       else if (error.code == 7) { ... }
         
          //       // Response contains the original server response to the request if available.
          //     });
          // });
       </script>
        @yield('jsCode')
    </body>

 
</html>
