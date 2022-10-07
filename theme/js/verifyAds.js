    // ajax request for verify ads

                  $(document).ready(function(){

                    //display user Ads in table 
                    displayAllVerifyUSerAds()
                  function displayAllVerifyUSerAds(){
                    $.ajax({
                      url:'../controller/process.php',
                      method: 'post',
                      data: {action: 'dispayVerifiedAds'},
                      success: function(response){
                        // console.log(response)
                        $("#displayAllVerifyAds").html(response)

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

                  // view ads
                  $('body').on('click', '.viewSimpUserVerifyAd', function(e){
                    e.preventDefault()
                    viewSimpVerifyAds = $(this).attr('id')
                    // console.log(viewSimpAds)

                    $.ajax({
                      url: '../controller/process.php',
                      method: 'POST',
                      data: {viewSimpVerifyAds: viewSimpVerifyAds},
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

                      //delete Ads
                        $('body').on('click', '.deleteSimpUserVerifyAd', function(e){
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
                                      displayAllVerifyUSerAds()
                                  }
                              })
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