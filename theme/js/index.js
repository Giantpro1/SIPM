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


     $("#search_Btn").click(function (e) { 
        e.preventDefault()
        request = $("#product_Search").val();
        if(request){
            $.ajax({
                url: "./controller/index.php",
                type: "POST",
                data: {
                    request:request
                },
                success: function (response) {
                    // console.log(response)
                    $("#search_Result").html(response);
                }
            });
        }
     });
})