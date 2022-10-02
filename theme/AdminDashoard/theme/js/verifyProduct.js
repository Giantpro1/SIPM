

$(document).ready(function(){
    displayVerifyProduct()
    function displayVerifyProduct(){
        $.ajax({
            url: "../controller/productProccess.php",
            type: "POST",
            data: {action: 'displayVerifyProduct'},
            success: function (response) {
                // console.log(response)
                // data  = JSON.parse(response)
                // console.log(response)
               $("#displayVerifyProducts").html(response);
            }
        });
    }
})