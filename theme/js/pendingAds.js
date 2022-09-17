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


    })