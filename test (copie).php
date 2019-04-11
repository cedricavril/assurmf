<!DOCTYPE html>
<html>
<head>
  <title>ASSUR & MF - espace de stockage</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
      <div class="panel-body">

        <!-- Standar Form -->
        <h4>Select files from your computer</h4>
        <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
          <div class="form-inline">
            <div class="form-group">
              <input type="file" name="files" id="js-upload-files" multiple>
            </div>
            <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
          </div>
        </form>

        <!-- Drop Zone -->
        <h4>Or drag and drop files below</h4>
        <div class="upload-drop-zone" id="drop-zone">
          Just drag and drop files here
        </div>

        <!-- Progress Bar -->
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>

        <!-- Upload Finished -->
        <div class="js-upload-finished">
          <h3>Processed files</h3>
          <div class="list-group">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /container -->




<script type="text/javascript">


url = "upload.php";


jQuery(document).ready(function() {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');


    var startUpload = function(files) {


    }

    uploadForm.addEventListener('submit', function(e) {
        var uploadFiles = document.getElementById('js-upload-files').files;
        e.preventDefault();

      console.log("files : " + uploadFiles);


var data = new FormData();

jQuery.each(uploadFiles, function(i, file) {
    data.append('file-'+i, file);
});
data.append('id', 1);
              // calls the controller that will call the PDO manager to add the submitted user
        $.ajax({
            url: url,
            method: "POST",
            data: data,
            processData: false,
            contentType: false,
                success: function( msg ) {
                msg = JSON.parse(msg);
$.each(msg, function(i,e){
 $(".js-upload-finished .list-group").append("<a href='#' class='list-group-item list-group-item-success'><span class='badge alert-success pull-right'>Success</span>" + e + "</a>");
});


//                $('#addEmployeeModal').modal('hide');
                //display the user list once done and display the message
//                getList();
//                flashShow(JSON.parse(msg.type), JSON.parse(msg.message));
                console.log(msg);
            }, 
            fail: function(failMsg) {
                alert(failMsg);
            }
        });


//        startUpload(uploadFiles)




    })

    dropZone.ondrop = function(e) {
        e.preventDefault();
        this.className = 'upload-drop-zone';

        startUpload(e.dataTransfer.files)
    }

    dropZone.ondragover = function() {
        this.className = 'upload-drop-zone drop';
        return false;
    }

    dropZone.ondragleave = function() {
        this.className = 'upload-drop-zone';
        return false;
    }

});

</script>


</body>
</html>