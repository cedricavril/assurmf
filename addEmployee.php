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
                        <input id="form_tel" type="tel" name="tel" placeholder="XX XX XX XX XX" pattern="\d{2} \d{2} \d{2} \d{2} \d{2}" class="form-control masked" data-user="tel" data-error="Téléphone requis." required="">
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Adresse</label>
                        <textarea class="form-control" data-user="address" required></textarea>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Code postal</label>
                        <input type="text" class="form-control" data-user="postcode" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Ville</label>
                        <input type="text" class="form-control" data-user="city" required>
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
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-success" value=">> suivant">
                    </div>
                </div>
            </form>

<script type="text/javascript">

var urlAdd = "userController.php";

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
            address: $('#addEmployeeModal [data-user="address"]').val(), 
            postcode: $('#addEmployeeModal [data-user="postcode"]').val(), 
            city: $('#addEmployeeModal [data-user="city"]').val(), 
            prenom: $('#addEmployeeModal [data-user="prenom"]').val(), 
            nom: $('#addEmployeeModal [data-user="nom"]').val(),
            birth_date: $('#addEmployeeModal [data-user="birthDate"]').val(),
            licence_date: $('#addEmployeeModal [data-user="licenceDate"]').val()
        }
        user.CRUD = 'C';


         // calls the controller that will call the PDO manager to add the submitted user
        $.ajax({
            url: urlAdd,
            method: "POST",
            data: user,
            success: function( successMsg ) {
                successMsg = JSON.parse(successMsg);
                $('#addEmployeeModal').modal('hide');
                id = successMsg.id;
                //display the user list once done and display the message
                flashShow(successMsg.type, successMsg.message);
                $('#addFilesModal').modal('show');
            }, 
            fail: function(failMsg) {
                alert(JSON.parse(failMsg).message);
            }
        });
    });
</script>
<script type="application/javascript" src="js/inputMasking.js"></script>
<script type="application/javascript" src="js/jquery/addressCompletor.js"></script>
<script type="text/javascript">
    addressCompletor($('#addEmployeeModal [data-user="address"], #addEmployeeModal [data-user="postcode"], #addEmployeeModal [data-user="city"]'));
</script>
<!--</body>-->