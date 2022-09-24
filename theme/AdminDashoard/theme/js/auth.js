


$(document).ready(function(){
    $("#Admin_LogBtn").click(function(e){
        e.preventDefault()
        $.ajax({
            url: "http://localhost/Giantpro/SIPM/theme/AdminDashoard/controller/api/signIn.php",
            type: "POST",
            data: $("#Admin_Log").serialize(),
            success: function (response) {
                // console.log(response)
                if(response.message === 'user not found'){
                    swal.fire({
                        title: 'Oops!',
                        text: 'user not found',
                        icon: 'error'
                    })
                }else if(response.message === 'password incorrect'){
                    swal.fire({
                        title: 'Oops!',
                        text: 'password incorrect',
                        icon: 'error'
                    })
                }else if(response.message === 'login successfully'){
                    window.location = 'index'
                }else{
                    
                }
            }
        });
    })
})