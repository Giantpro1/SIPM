
$(document).ready(function(){
    displayDisapproveAds()
    function displayDisapproveAds() {
        $.ajax({
            url: "../controller/process.php",
            type: "POST",
            data: {action: 'dispayDis'},
            success: function (response) {
                // console.log(response)
                $("#displayDisapprove").html(response)
            }
        });
    }


                            // view ads
                            $('body').on('click', '.editDisAds', function(e){
                                e.preventDefault()
                                viewSimpDisAds = $(this).attr('id')
                                // console.log(viewSimpDisAds)
      
                                $.ajax({
                                  url: '../controller/process.php',
                                  method: 'POST',
                                  data: {viewSimpDisAds: viewSimpDisAds},
                                  success: function(response){
                                    // console.log(response)
                                    data = JSON.parse(response)
                                    // console.log(data)
                                    $("#v_AdsImgs").val(data.simpUser_AdsImg)
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
                                      $("#editSimpUser_DisAd").modal('hide')
                                      Swal.fire({
                                        icon: 'success',
                                        text: 'You have successfully Update your Ads',
                                        title: 'Ads Updated'
                                      })
                                      displayDisapproveAds()
                                    }
                                  })
                              })
  })