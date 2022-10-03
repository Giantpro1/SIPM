
$(document).ready(function(){
    displayDisapproveProduct()
    function displayDisapproveProduct(){
        $.ajax({
            url: "../controller/productProccess.php",
            type: "POST",
            data: {action: 'displayDisapproveProduct'},
            success: function (response) {
                // console.log(response)
                data  = JSON.parse(response)
                console.log(data)
            //    $("#displayVerifyProducts").html(response);
            }
        });
    }
})