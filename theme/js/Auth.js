
// register ajax request

$(document).ready(function(){
    $("#simp_Register_Btn").click(function(error){
      if($("#simp_Register")[0].checkValidity()){
        error.preventDefault();
        $("#simp_Register_Btn").text("please Wait...");
          if($("#simpUser_Password_val").val() != $("#simpUser_Password_con").val()){
            swal.fire({
              title: 'Oops!',
              icon: 'error',
              text: 'password does not match!!!'
            }).then(
              $("#simp_Register")[0].reset()
            )
              $("#simp_Register_Btn").val("Register")
          }else{
            $("#passError").html("");
  
            $.ajax({
              url: "../controller/action.php",
              method: "POST",
              data: $("#simp_Register").serialize() + "&action=simp_Reg",
              success:function(response){
                // console.log(response)
                if(response === "Register"){
                  window.location = "../index";
                }else if(response === "E-Mail already Exists!!!"){
                  swal.fire({
                    title: 'Oops!',
                    icon: 'error',
                    text: 'E-Mail already Exists!!!'
                  })
                }else if(response === "UserName already Exists!!!"){
                  swal.fire({
                    title: 'Oops!',
                    icon: 'error',
                    text: 'UserName already Exists!!!'
                  })
                }else if(response === "password must consist of lowercase, uppercase, special characters and must be 8 characters long"){
                  swal.fire({
                    title: 'Hoo!',
                    icon: 'warning',
                    text: 'password must consist of lowercase, uppercase, special characters and must be 8 characters long'
                  })
                }else{

                }
              }
            });
          }
        // }
        
         
      }
    })
  })

  //login ajax request

  $(document).ready(function(){
    $("#simpUSer_loginBtn").click(function(e){
      if($("#simpUSer_login")[0].checkValidity()){
        e.preventDefault()
        $("#simpUSer_loginBtn").text("please Wait...")

        $.ajax({
          url:'../controller/action.php',
          method:'POST',
          data:$("#simpUSer_login").serialize()+'&action=simp_login',
          success: function(response){
            // console.log(response)
            if(response === 'login'){
              window.location = "../index"
            }else if(response === 'password not correct!'){
              swal.fire({
                title:'Oops!',
                icon:'error',
                text: 'password not correct!'
              }).then(
                $("#simpUSer_login")[0].reset()
              )
              // $("#form_Error").html(response)
            }else if(response === 'user not found'){
              swal.fire({
                title:'Oops!',
                icon:'error',
                text: 'user not found!'
              }).then(
                $("#simpUSer_login")[0].reset()
              )
            }else{

            }
          }
        })
      }
    })
  })