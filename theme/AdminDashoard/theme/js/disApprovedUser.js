

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

                  $("#reFreshBtn").click(function (e) {
                    e.preventDefault()
                    location.reload()
                    })
                    

                    countDisapprovedUsers()
                    function countDisapprovedUsers() {
                      $.ajax({
                        url:'../controller/dbAction.php',
                        method: 'post',
                        data: {action: 'CountDisapprovedAcct'},
                        success: function(response){
                          // console.log(response)
                          if(response == ''){
                              $("#showDis").text(0)
                          }else{
                          $("#showDis").text(response)
                          }
                        }
                      })
                    }

                      // approve user account
                $('body').on('click', '.verifyUser', function(e){
                  e.preventDefault()
                  verifyUser = $(this).attr('id')
                  Swal.fire({
                    title: 'Approve?',
                    text: 'Are you sure you want to approve this user?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#FF0000",
                    cancelButtonColor: "blue",
                    confirmButtonText: 'Approve user'
                  }).then((result)=>{
                    if(result.value){
                      $.ajax({
                          url:'../controller/dbAction.php',
                        method:'POST',
                        data: {verifyUser: verifyUser},
                        success: function(response){
                          Swal.fire({
                          icon:'success',
                          text:'You have successfully approved this user',
                          title:'user Approved'
                        })
                        displayDisapproverUsers()
                        }
                      })
                    }
                  })
                
                })

                
                            //delete User
                            $('body').on('click', '.deleteUser', function(e){
                              e.preventDefault()
                              deleteUser = $(this).attr('id')
                              swal.fire({
                                title: 'Delete?',
                                text: 'Are you sure you want to delete this User?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: "#FF0000",
                                cancelButtonColor: 'blue',
                                confirmButtonText: 'Delete Ads'
                              }).then((result)=>{
                                if(result.value){
                                  $.ajax({
                                    url: '../controller/dbAction.php',
                                    method: 'POST',
                                    data: {deleteUser: deleteUser},
                                    success: function(response){
                                        swal.fire({
                                          icon: 'success',
                                          text: 'You have successfully deleted your User',
                                          title: 'Ads Deleted'
                                        }).then(location.reload())
                                        displayVerifyUser()
                                    }
                                  })
                                }
                              })
                            })
});