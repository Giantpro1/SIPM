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
                $("#displayPendingAds").html(response)
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
                                      displayAllUSerAds()
                                    }
                                  })
                              })


                                                // count verify ads

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
    })