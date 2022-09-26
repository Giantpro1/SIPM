

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

                  // view user
                  $('body').on('click', '.viewUser', function(e){
                    e.preventDefault()
                    viewUser = $(this).attr('id')
            
                    $.ajax({
                      url: "http://localhost/Giantpro/SIPM/theme/AdminDashoard/controller/api/viewDisapprovedUser.php",
                      type: "POST",
                      data: {viewUser: viewUser},
                      success: function (response) {
                        // console.log(response.message)
                        data = JSON.stringify(response.message)
                        // console.log(data)
                        // data = JSON.stringify(response)
                        // console.log(data)
                        result = JSON.parse(data)
                        console.log(result)
                        $("#viewUserProPic").html("<img class='product-thumb img-thumbnail img-fluid' src='../"+result.sipmUser_ProfileImg+"'>")
                        $("#viewUserName").text(result.simp_UserName)
                        $("#viewUserEmail").text(result.simpUser_Email)
                        $("#viewUserUnique").text(result.unique_id)
                        $("#viewUserFistName").text(result.sipmUser_FirstName)
                        $("#viewUserSecondName").text(result.sipmUser_SecondName)
                        $("#viewUserComName").text(result.sipmUser_CommunityName)
                      }
                    });
                  })
});