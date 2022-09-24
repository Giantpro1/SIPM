
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
              displayPendingUser()
              }
            })
          }
        })
       
      })
});