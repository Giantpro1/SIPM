
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
  })