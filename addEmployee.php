            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Demande de devis</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" style="padding: 0;">
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Prénom</label>
                        <input type="text" class="form-control" data-user="prenom" id="highLight" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Nom</label>
                        <input type="text" class="form-control" data-user="nom" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>E-mail</label>
                        <input type="email" class="form-control" data-user="email" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Téléphone</label>
                        <input type="tel" class="form-control" data-user="tel" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Adresse</label>
                        <textarea class="form-control" data-user="adresse" required></textarea>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Date de naissance</label>
                        <input type="date" class="form-control" data-user="birthDate" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Date d'obtention du permis</label>
                        <input type="date" class="form-control" data-user="licenceDate" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                    <input type="submit" class="btn btn-success" value=">> suivant">
                </div>
            </form>

<script type="text/javascript">

var urlAdd = "admin/userController.php";

flashShow = function(msgAlert,  msgText) {
    var alertBox = '<div class="alert alert-' + msgAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + msgText + '</div>';
//    $('#usersListFlash').find('.messages').html(alertBox);
}

$('#addEmployeeModal').on('shown.bs.modal', function(){
    $('#addEmployeeModal form').trigger('reset');
});

$('#addFilesModal').on('shown.bs.modal', function(){
    $('#addFilesModal form').trigger('reset');
    $('.js-upload-finished').html('');
});


    // adds a user
    $('#addEmployeeModal form').submit(function(e){
        e.preventDefault();
        user = {
            id: "",
            email: $('#addEmployeeModal [data-user="email"]').val(), 
            description: $('#addEmployeeModal [data-user="description"]').val(), 
            tel: $('#addEmployeeModal [data-user="tel"]').val(), 
            adresse: $('#addEmployeeModal [data-user="adresse"]').val(), 
            prenom: $('#addEmployeeModal [data-user="prenom"]').val(), 
            nom: $('#addEmployeeModal [data-user="nom"]').val(),
            birth_date: $('#addEmployeeModal [data-user="birthDate"]').val(),
            licence_date: $('#addEmployeeModal [data-user="licenceDate"]').val()
        }
        user.CRUD = 'C';

         // calls the controller that will call the PDO manager to add the submitted user
        var msg = ajax(urlAdd, user);
        if (msg.type != 'fail') {
            $('#addEmployeeModal').modal('hide');
                id = msg.id;
                //display the user list once done and display the message
                flashShow(msg.type, msg.message);
                $('#addFilesModal').modal('show');
        } else {
            alert(msg.message);
        }
    });
</script>