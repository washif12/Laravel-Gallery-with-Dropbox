<script src="{{URL::to('/')}}/assets/js/main.js"></script>

  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });

    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone(".dropzone",{ 
      autoProcessQueue: false,
      maxFilesize: 3,  // 3 mb
      acceptedFiles: ".jpeg,.jpg,.png,.pdf",
      uploadMultiple: true,
      maxFiles: 25
	   });

    /*myDropzone.on("sending", function(file, xhr, formData) {
       formData.append("_token", CSRF_TOKEN);
    });*/

    $('#uploadfiles').click(function(){
	   myDropzone.processQueue();
	});
  </script>
    
  </body>
</html>