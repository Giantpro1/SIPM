

$(document).ready(function(){
    displayPendingProduct()
    function displayPendingProduct(){
        $.ajax({
            url: "../controller/productProccess.php",
            type: "POST",
            data: {action: 'displayPendProduct'},
            success: function (response) {
                console.log(response)
                data  = JSON.parse(response)
                console.log(data)
            //    $("#displayPendingAds").html(response);
            }
        });
    }
})