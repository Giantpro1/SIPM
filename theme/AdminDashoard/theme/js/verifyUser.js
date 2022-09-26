

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

    // disapproverUser
    $('body').on('click', '.disapproveUser', function(e){
        e.preventDefault()
        DisapproveUser = $(this).attr('id')
        Swal.fire({
          title: 'Disapprove?',
          text: 'Are you sure you want to Disapprove this user?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: "#FF0000",
          cancelButtonColor: "blue",
          confirmButtonText: 'Disapprove user'
        }).then((result)=>{
          if(result.value){
            $.ajax({
                url:'http://localhost/Giantpro/SIPM/theme/AdminDashoard/controller/api/disapproveUser.php',
              method:'POST',
              data: {DisapproveUser: DisapproveUser},
              success: function(response){
                Swal.fire({
                icon:'success',
                text:'You have successfully disapproved this user',
                title:'user disapproved'
              })
              displayVerifyUser()
              }
            })
          }
        })
       
      })

            // view user
            $('body').on('click', '.viewUser', function(e){
              e.preventDefault()
              viewUser = $(this).attr('id')
      
              $.ajax({
                url: "http://localhost/Giantpro/SIPM/theme/AdminDashoard/controller/api/viewVerifyUser.php",
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