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