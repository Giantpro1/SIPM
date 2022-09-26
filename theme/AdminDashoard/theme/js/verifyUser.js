

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
});