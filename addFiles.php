    <div class="panel panel-default" style="overflow: auto;">
      <div class="panel-heading"><strong>Envoi de fichiers</strong> <small>Envoyez vos images</small></div>
      <div class="panel-body">

        <!-- Standar Form -->
        <h4>Sélectionnez vos fichiers depuis votre ordinateur ou mobile</h4>
        <form method="post" enctype="multipart/form-data" id="js-upload-form">
          <div class="form-inline">
            <div class="form-group">
              <input type="file" name="files" id="js-upload-files" multiple>
            </div>
            <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Envoyer</button>
          </div>
        </form>

        <!-- Drop Zone -->
        <h4>ou glissez-déposez les ci-dessous</h4>
        <div class="upload-drop-zone" id="drop-zone">
          Glissez-déposez ici
        </div>

        <!-- Progress Bar -->
<!--        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="sr-only">60% Complete</span>
          </div>
        </div>-->
        <div id="waiting" style="display: none;"><img src="images/components/loading.gif"></div>

        <!-- Upload Finished -->
        <div class="js-upload-finished">
          <h3>Fichiers traités :</h3>
          <div class="list-group">
          </div>
            <button type="button" class="btn btn-sm btn-primary" id="complete">Terminer</button>
        </div>
      </div>
    </div>





<script type="text/javascript">

var urlUpload = "upload.php";

jQuery(document).ready(function() {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {

      $('#waiting').show();

      var uploadFiles = files;

        var data = new FormData();

        jQuery.each(uploadFiles, function(i, file) {
            data.append('file-'+i, file);
        });

//retrieve user's id
        data.append('id', id);

       // calls the controller that will call the PDO manager to add the submitted user
        $.ajax({
            url: urlUpload,
            method: "POST",
            data: data,
            processData: false,
            contentType: false,
            success: function( msg ) {
              msg = JSON.parse(msg);
              $.each(msg, function(i,e){
               $(".js-upload-finished .list-group").append("<a href='#' class='list-group-item list-group-item-success'><span class='badge alert-success pull-right'>Succès</span>" + e + "</a>");
              });

              $("#waiting").hide();

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
    }

//    uploadForm.submit(function(e) {
    $('#addFilesModal form').submit(function(e) {
        e.preventDefault();
        var uploadFiles = document.getElementById('js-upload-files').files;

        startUpload(uploadFiles)
    });

    $('#addFilesModal').on('shown.bs.modal', function(){
      $('#addFilesModal form')[0].reset();
    });

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

    $('#complete').click(function(e) {
      $('#addFilesModal').modal('hide');

      var data = new FormData();

      jQuery.each(user, function(key, val) {
//            data.append('file-'+i, file);
          data.append(key, val);
      });
      data.append('lienImages', 'https://assurmf.fr/images/' + parseInt(JSON.parse(id)));

        $.ajax({
            url: 'includes/forms/contact/register.php',
            method: "POST",
            data: data,
            processData: false,
            contentType: false,
            success: function( msg ) {
//              msg = JSON.parse(msg);
//                $('#addEmployeeModal').modal('hide');
                //display the user list once done and display the message
//                getList();
//                flashShow(JSON.parse(msg.type), JSON.parse(msg.message));
                  console.log(msg);
                  alert(msg.message);
            }, 
            fail: function(failMsg) {
                alert(failMsg);
            }
        });



    });

});

</script>