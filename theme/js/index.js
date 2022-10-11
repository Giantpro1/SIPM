$(document).ready(function(){
    displayTreningads()
    function displayTreningads() { 
        $.ajax({
            url: "./controller/index.php",
            type: "POST",
            data: {action: 'displayTrendingAds'},
            success: function (response) {
                // console.log(response)
                // data =JSON.parse(response)
                // console.log(data)
                // $(".trending-ads-slide").html(response)
            }
        });
     }


     
})