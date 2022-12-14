
                  $(document).ready(function(){

                    //display user Ads in table 
                  displayAllUSerAds()
                  function displayAllUSerAds(){
                    $.ajax({
                      url:'../controller/process.php',
                      method: 'post',
                      data: {action: 'dispayAds'},
                      success: function(response){
                        // console.log(response)
                        simpUserStatus = $(".status").attr('id')
                        // console.log(simpUserStatus)
                        if(simpUserStatus == 0){
                          swal.fire({
                            text: 'Yours Ads will display after your account have been verified!',
                            icon: 'warning',
                            title: 'Ooops!'
                          }).then($("#displaysimp_UserAds").text("wait after 24 hours till account would be verified"))
                        }else if(simpUserStatus == 2){
                          swal.fire({
                            text: 'Yours Ads will display after your account have been verified!',
                            icon: 'warning',
                            title: 'Ooops!'
                          }).then($("#displaysimp_UserAds").text("Your account have been disapproved!"))
                        }else{
                          $("#displaysimp_UserAds").html(response)

                        }
                          // pagination

                      // $('#displaysimp_UserAds').pagination({
                      //   datSource: response,
                      //   pageSize: 5,
                      //   callback: function(data, pagination){
                      //     $("#displaysimp_UserAds").html(data)
                      //   }
                      // })
                      }
                    })
                  }
                

                //delete Ads
                $('body').on('click', '.deleteSimpUserAd', function(e){
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
                          console.log(response)
                            swal.fire({
                              icon: 'success',
                              text: 'You have successfully deleted your Ads',
                              title: 'Ads Deleted'
                            }).then(location.reload())
                            displayAllUSerAds()
                        }
                      })
                    }
                  })
                })

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

                        // view ads
                        $('body').on('click', '.viewSimpUserAd', function(e){
                          e.preventDefault()
                          viewSimpAds = $(this).attr('id')
                          // console.log(viewSimpAds)

                          $.ajax({
                            url: '../controller/process.php',
                            method: 'POST',
                            data: {viewSimpAds: viewSimpAds},
                            success: function(response){
                              // console.log(response)
                              data = JSON.parse(response)
                              // console.log(data)
                              // $("#v_AdsImgs").val(data.simpUser_AdsImg)
                              $("#v_AdsImgs").html("<img class='product-thumb rounded-circle img-fluid' src='../images/adsImages/"+data.simpUser_AdsImg+"'>")
                              $("#v_AdsTitle").text(data.simpUser_AdsTitle)
                              $("#v_AdsCategory").text(data.sipmUser_AdsCategory)
                              $("#v_AdsDescription").text(data.sipmUser_AdsDescripion)
                              $("#v_AdsType").text(data.sipmUser_AdsType)
                              $("#v_AdsProductPrices").text(data.sipmUser_AdsPrice)
                              $("#v_AdsAdress").text(data.sipmUser_AdsContactAddress)
                              $("#v_AdsEmail").text(data.sipmUser_AdsContactEmail)
                              $("#v_AdsPosterName").text(data.sipmUser_AdsContactName)
                              $("#v_AdsNum").text(data.sipmUser_AdsContactNumber)
                            }
                          })
                        })

                        // edit ads
                        $('body').on('click', '.editSimpUSerAd', function(e){
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
                              $("#adsNegotiaion").val(data.sipmUser_AdsNegotiation)
                              $("#adsPosterAddress").val(data.sipmUser_AdsContactAddress)
                              $("#adsPosterEmail").val(data.sipmUser_AdsContactEmail)
                              $("#adsPosterName").val(data.sipmUser_AdsContactName)
                              $("#adsPosterNumber").val(data.sipmUser_AdsContactNumber)
                              $("#adsType").val(data.sipmUser_AdsType)
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
                        
                        // edit ads

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
                                displayAllUSerAds()
                              }
                            })
                        })

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