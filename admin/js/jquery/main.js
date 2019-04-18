jQuery(document).ready(function() {
// this main js calls the user controller when submitting the form or loading the page.
var url = "userController.php";

    // constructs the user obj matching the modal Id
    userFromModal = function(modalIdSelector = '') {
        var user = {
            id: "",
            email: $(modalIdSelector + ' [data-user="email"]').val(), 
            description: $(modalIdSelector + ' [data-user="description"]').val(), 
            tel: $(modalIdSelector + ' [data-user="tel"]').val(), 
            adresse: $(modalIdSelector + ' [data-user="adresse"]').val(), 
            prenom: $(modalIdSelector + ' [data-user="prenom"]').val(), 
            nom: $(modalIdSelector + ' [data-user="nom"]').val(),
            birth_date: $(modalIdSelector + ' [data-user="birthDate"]').val(),
            licence_date: $(modalIdSelector + ' [data-user="licenceDate"]').val()
        }

        return user;
    }

    // declaration and initiation, for both multiple and single selection
    selectedUsers = Array();
    data = Array();
    currentId = 0;

    // Select/Deselect checkboxes
    function checkboxCheckAll() {
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                // reinitialization
                selectedUsers = Array();
                currentId = 0;

                // 
                checkbox.each(function(){
                    this.checked = true;
                        // check if the row is valid and push the array
                        if ($(this).data('nom') != 'undefined') {
                            selectedUsers.push({
                                nom: $(this).data('nom'),
                                id: $(this).data('id'),
                                prenom: $(this).data('prenom')
                            });
                        }
                    });
            } else { // uncheck => clear the memory (reinitialize)
                checkbox.each(function(){
                    this.checked = false;
                    currentId = 0;
                    selectedUsers = Array();
                });
            } 
        });
        checkbox.click(function(){
            if(!this.checked){
                $("#selectAll").prop("checked", false);
            }
        });
    }

    function save(e, modalIdSelector, crud) {
        e.preventDefault();
        user = userFromModal(modalIdSelector);
        user.CRUD = crud;
        user.id = currentId;

        //calls the controller that will call the PDO manager to save (add or edit) the submitted user
        var msg = ajax(url, user);
        if (msg.type != 'fail') {
            $(modalIdSelector).modal('hide');
            //display the user list once done and display the message
            getList();
            flashShow(msg.data.type, msg.data.message);
        } else {
            alert(msg.data.message);
        }
    };

    // add a user
    $('#addEmployeeModal form').submit(function(e){
        save(e, '#addEmployeeModal', 'C');
    });

    //edit a user
    $('#editEmployeeModal form').submit(function(e){
        save(e, '#editEmployeeModal', 'U');
    });

    flashShow = function(msgAlert,  msgText) {
        var alertBox = '<div class="alert alert-' + msgAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + msgText + '</div>';
        $('#usersListFlash').find('.messages').html(alertBox);
    }

    // display the user list.
    getList = function() {
        user = userFromModal();

        var ajaxQuery = ajax(url);
        var data = ajaxQuery.data;

        // we will use an empty user list table row
        userEmptyRow = $('#usersList tr.user:last-child').clone();
        
        // clear the table content
        $('#usersList').html('');
        for (var i = 0; i < data.length; i++) {
            // add an empty user row
            userEmptyRow.appendTo('#usersList');
            userEmptyRow = $('tr.user:last-child').clone();
            // and fill it

            $('tr.user:last-child td.select').html('<span class="custom-checkbox" ><input type="checkbox" id="' + JSON.parse(data[i]).id + '" name="options[]" value="1"><label for="' + JSON.parse(data[i]).id + '"></label></span>');
            $('tr.user:last-child td.nom').html(JSON.parse(data[i]).nom);
            $('tr.user:last-child td.prenom').html(JSON.parse(data[i]).prenom);
            $('tr.user:last-child td.email').html(JSON.parse(data[i]).email);
            $('tr.user:last-child td.adresse').html(JSON.parse(data[i]).adresse);
            $('tr.user:last-child td.tel').html(JSON.parse(data[i]).tel);
            $('tr.user:last-child td.date_arrivee').html(JSON.parse(data[i]).date_arrivee);
            $('tr.user:last-child td.actions a').attr('id', JSON.parse(data[i]).id);
            $('tr.user:last-child td.select input').data('nom', JSON.parse(data[i]).nom);
            $('tr.user:last-child td.select input').data('prenom', JSON.parse(data[i]).prenom);
            $('tr.user:last-child td.select input').data('id', JSON.parse(data[i]).id);

            /* checkbboxes dynamic handling with the selectedUsers array - nom and prenom 
            are used for delete alert display */
            $('tr.user:last-child td.select input').change(function(e) {
                selectedUser = {
                    id: $(this).data('id'),
                    nom: $(this).data('nom'),
                    prenom: $(this).data('prenom'),
                };

                if(this.checked) selectedUsers.push(selectedUser);
                else {
                    selectedUsers = $.grep(selectedUsers, function(u, i){
                        return u.id != selectedUser.id;
                    });
                }
            });

            // catch the user id when any action button is clicked
            $('tr.user:last-child td.actions a').click(function() {
                currentId = parseInt($(this).attr('id'));
            });
        };
        checkboxCheckAll();




    }

    getUser = function(id) {
        data = {
            CRUD: 'G',
            id: id
        }
        var getUser = ajax(url, data);
        if (getUser.type != 'fail') {
            user = getUser.data;
            $('#editEmployeeModal input[data-user="email"]').val(user.email);
            $('#editEmployeeModal textarea[data-user="description"]').val(user.description);
            $('#editEmployeeModal input[data-user="tel"]').val(user.tel);
            $('#editEmployeeModal textarea[data-user="adresse"]').val(user.adresse);
            $('#editEmployeeModal input[data-user="prenom"]').val(user.prenom);
            $('#editEmployeeModal input[data-user="nom"]').val(user.nom);
            $('#editEmployeeModal input[data-user="birthDate"]').val(user.birth_date);
            $('#editEmployeeModal input[data-user="licenceDate"]').val(user.licence_date);
        } else {
            alert(getUser.message);
        }
    }

    delUserWarning = function(id) {
        usersToDeleteMessage = '';
        if ($.isArray(id))
        {
            $.each(id, function(key, value){
                usersToDeleteMessage += '<p class="alert-danger text-center">' + value.nom + ' ' + value.prenom + '</p>';
            }); 
            $('#deleteEmployeeModal').modal();
            $('#deleteEmployeeModal .modal-body').html(usersToDeleteMessage);

        } else if (typeof(id) == 'string') {
            $('#deleteEmployeeModal .modal-body').html($('#deleteEmployeeModal .modal-body').html()
               + '<p class="alert-danger text-center">' + id + '</p>');
        } else {
            user.id = id;
            data = {
                CRUD: 'G',
                id: id
            }

            var delUser = ajax(url, data);
            if (delUser.type != 'fail') {
                user = delUser.data;
                // add name and surname to the message warning
                $('#deleteEmployeeModal .modal-body').html($('#deleteEmployeeModal .modal-body').html()
                   + '<p class="alert-danger text-center">' + user.nom + ' ' + user.prenom + '</p>');
            } else {
                alert(delUser.message);
            }
        }
    }

    $('#deleteEmployeeModal form').submit(function(e){
        e.preventDefault();
        user.CRUD = 'D';
        user.id = (selectedUsers.length == 0) ? currentId : selectedUsers;

        // calls the controller that will call the PDO manager to del the submitted user
        var delUser = ajax(url, user);
        if (delUser.type != 'fail') {
            $('#deleteEmployeeModal').modal('hide');
            //display the user list once done and free the id and display the message
            getList();
            if (currentId != 0) currentId = 0;
            else selectedUsers = Array();
            flashShow(JSON.parse(delUser.type), JSON.parse(delUser.message));
        } else {
            alert(delUser.message);
        }
    });

    $('#addEmployeeModal').on('show.bs.modal', function(){
        $('#addEmployeeModal form').trigger('reset');
    });

    $('#editEmployeeModal').on('show.bs.modal', function(){
        $('#editEmployeeModal form').trigger('reset');
        getUser(currentId);
    });

    $('#deleteEmployeeModal').on('show.bs.modal', function(){
        // empty modal message 
        $('#deleteEmployeeModal .modal-body p.alert-danger').html('');
    });

    $('#deleteEmployeeModal').on('shown.bs.modal', function(){
        // action on traschcan
        if ((selectedUsers.length == 0) && (currentId != 0)) delUserWarning(currentId);
        else if ((selectedUsers.length != 0) && (currentId == 0)) delUserWarning(selectedUsers);
        else delUserWarning("Rien à supprimer. Les utilisateurs de votre sélection seront supprimés.");
    });

    $('#usersListFlash a.btn-danger').click( function(){
        delUserWarning(selectedUsers);
    });

    getList();
    return false;
});