

$(document).ready(function(){
    displayDisapproverUsers()
    function displayDisapproverUsers(){
        $.ajax({
            url: "../controller/dbAction.php",
            type: "POST",
            data: {action: 'displayDisApproveUser'},
            success: function (response) {
                // console.log(response)
                $("#displayDisapprovedUSer").html(response);
            }
        });
      }
});