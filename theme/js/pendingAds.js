$(document).ready(function(){

    //display pendind Ads
        displayPendingAds()
    function displayPendingAds(){
        $.ajax({
            url: '../controller/process.php',
            method: 'POST',
            data: {action: 'displayPendAds'},
            success: function(response){
                console.log(response)
                // $("#displayPendingAds").html(response)

                simpUserStatus = $(".status").attr('id')
                // console.log(simpUserStatus)
                if(simpUserStatus == 0){
                  swal.fire({
                    text: 'Yours Ads will display after your account have been verified!',
                    icon: 'warning',
                    title: 'Ooops!'
                  }).then($("#displayPendingAds").text("wait after 24 hours till account would be verified"))
                }else if(simpUserStatus == 2){
                  swal.fire({
                    text: 'Yours Ads will display after your account have been verified!',
                    icon: 'warning',
                    title: 'Ooops!'
                  }).then($("#displayPendingAds").text("Your account have been disapproved!"))
                }else{
                  $("#displayPendingAds").html(response)
                }
            }
        })
    }

    //delete Ads
    $('body').on('click', '.deleteSimpUserPendAd', function(e){
        e.preventDefault()
        deleteAds = $(this).attr('id')

        swal.fire({
            title: 'Delete?',
            text: 'Are you sure you want to delete this Ads?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#FF0000",
            cancelButtonColor: 'blue',
            confirmButtonText: 'Delete Ads'
        }).then((result)=>{
            if(result.value){
            $.ajax({
                url: '../controller/process.php',
                method: 'POST',
                data: {deleteAds: deleteAds},
                success: function(response){
                    swal.fire({
                    icon: 'success',
                    text: 'You have successfully deleted your Ads',
                    title: 'Ads Deleted'
                    }).then(location.reload())
                    displayPendingAds()
                }
            })
            }
        })
        })

        // display-> edit pending ads
                              $('body').on('click', '.editSimpUSerPendAd', function(e){
                                e.preventDefault()
                                editSimpAds = $(this).attr('id')
                                // console.log(editSimpAds)
                                $.ajax({
                                  url: '../controller/process.php',
                                  method: 'POST',
                                  data: {editSimpAds: editSimpAds},
                                  success: function(response){
                                    data = JSON.parse(response)
                                    // console.log(data)
                                    $("#adsTitle").val(data.simpUser_AdsTitle)
                                    $("#adsCategory").val(data.sipmUser_AdsCategory)
                                    $("#adsDescription").val(data.sipmUser_AdsDescripion)
                                    $("#adsPrice").val(data.sipmUser_AdsPrice)
                                    // $("#adsNegotiaion").val(data.sipmUser_AdsNegotiation)
                                    $("#adsPosterAddress").val(data.sipmUser_AdsContactAddress)
                                    $("#adsPosterEmail").val(data.sipmUser_AdsContactEmail)
                                    $("#adsPosterName").val(data.sipmUser_AdsContactName)
                                    $("#adsPosterNumber").val(data.sipmUser_AdsContactNumber)
                                    // $("#adsType").val(data.sipmUser_AdsType)
                                    $("#adsPostId").val(data.sipmuser_PostId)

                                    if(data.sipmUser_AdsType == "personal"){
                                      $("#adsType").attr("checked", "checked")
                                  }else if(data.sipmUser_AdsType == "business"){
                                      $("#adsType_").attr("checked", "checked")
                                  }else{
                                      
                                  }

                                  if(data.sipmUser_AdsNegotiation == "Negotiable"){
                                      $("#adsNegotiaion").attr("checked", "checked")
                                  }else if(data.sipmUser_AdsNegotiation == "Not Negotiable"){
                                      $("#adsNegotiaion_").attr("checked", "checked")
                                  }else{
                                      
                                  }
                                  }
                                })
                              })
                              
                              // edit pending ads
      
                              $("#simpUserAds_Update").submit(function(e){
                                e.preventDefault()
                                  $.ajax({
                                    url: '../controller/process.php',
                                    method: 'POST',
                                    processData: false,
                                    contentType: false,
                                    cache: false,
                                    data: new FormData(this),
                                    beforeSend: function(){
                                      $("#simpUserAds_UpdateBtn").attr('disabled', 'disabled')
                                      $("#simpUserAds_Update").css('opacity', '.5')
                                    },
                                    success: function(response){
                                      console.log(response);
                                      $("#simpUserAds_UpdateBtn").attr('disabled')
                                      $("#simpUserAds_Update").css('opacity', '')
                                      $('#simpUserAds_Update')[0].reset()
                                      $("editSimpUser_Ad").modal('hide')
                                      Swal.fire({
                                        icon: 'success',
                                        text: 'You have successfully Update your Ads',
                                        title: 'Ads Updated'
                                      })
                                      displayPendingAds()
                                    }
                                  })
                              })


                            // verify ads count
                            countVerifyAds()
                            function countVerifyAds() {
                              $.ajax({
                                url:'../controller/process.php',
                                method: 'post',
                                data: {action: 'CountVerifyAds'},
                                success: function(response){
                                  // console.log(response)
                                  if(response == ''){
                                      $("#showVerify").text(0)
                                  }else{
                                  $("#showVerify").text(response)
                                  }
                                }
                              })
                            }

                  countPendingAds()
                  function countPendingAds() {
                    $.ajax({
                      url:'../controller/process.php',
                      method: 'post',
                      data: {action: 'CountPendingAds'},
                      success: function(response){
                        // console.log(response)
                        if(response == ''){
                            $("#showPend").text(0)
                        }else{
                        $("#showPend").text(response)
                        }
                      }
                    })
                  }

                  
                  countAllUserAds()
                  function countAllUserAds() {
                    $.ajax({
                      url:'../controller/process.php',
                      method: 'post',
                      data: {action: 'countAllUserAds'},
                      success: function(response){
                        // console.log(response)
                        if(response == ''){
                            $("#showAll").text(0)
                        }else{
                        $("#showAll").text(response)
                        }
                      }
                    })
                  }

                                  //delete Account
                $('body').on('click', '.deleteaccount', function(e){
                  e.preventDefault()
                  deleteAcct = $(this).attr('id')
                  // console.log(deleteAcct)
                  swal.fire({
                    title: 'Delete?',
                    text: 'Are you sure you want to delete this Account?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#FF0000",
                    cancelButtonColor: 'blue',
                    confirmButtonText: 'Delete Account'
                  }).then((result)=>{
                    if(result.value){
                      $.ajax({
                        url: '../controller/process.php',
                        method: 'POST',
                        data: {deleteAcct: deleteAcct},
                        success: function(response){
                          console.log(response)
                            swal.fire({
                              icon: 'success',
                              text: 'You have successfully deleted your Account',
                              title: 'Ads Deleted'
                            }).then(window.location = 'logout')
                            displayAllUSerAds()
                            if(true){
                              // window.location = 'login'
                            }
                        }
                      })
                    }
                  })
                })

                  
                  countDisapprovedAds()
                  function countDisapprovedAds() {
                    $.ajax({
                      url:'../controller/process.php',
                      method: 'post',
                      data: {action: 'countDisapprovedAds'},
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
    })