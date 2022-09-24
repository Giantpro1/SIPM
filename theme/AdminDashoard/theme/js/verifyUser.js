

$(document).ready(function(){
    displayVerifyUser()
    function displayVerifyUser(){
        $.ajax({
            url: "../controller/dbAction.php",
            type: "POST",
            data: {action: 'displayVerifyUser'},
            success: function (response) {
                // console.log(response)
               $("#displayVerifyUser").html(response);
            }
        });
    }
});