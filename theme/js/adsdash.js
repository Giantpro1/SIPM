
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
                        $("#displaysimp_UserAds").html(response)
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
                              console.log(data)
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
                              data: new FormData(this)+ {action : 'updateAds'},
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
                              $("#showPend").text(response)
                              
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
                              $("#showVerify").text(response)
                              
                            }
                          })
                        }
                      })