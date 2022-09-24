
$(document).ready(function(){
    displayPendingUser()
    function displayPendingUser(){
        $.ajax({
            url: "../controller/dbAction.php",
            type: "POST",
            data: {action: 'displayUser'},
            success: function (response) {
                // console.log(response)
               $("#displayPendingUser").html(response);
            }
        });
    }
});