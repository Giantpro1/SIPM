

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


    $('body').on('click', '.viewProduct', function(e){
        e.preventDefault()
        viewVerifyProduct = $(this).attr('id')
        // console.log(viewProduct)

        $.ajax({
            type: "POST",
            url: "../controller/productProccess.php",
            data:{viewVerifyProduct:viewVerifyProduct} ,
            success: function (response) {
                // console.log(response)
                data = JSON.parse(response)
                // console.log(data)
                $("#productImg").html("<img class='product-thumb img-thumbnail img-fluid' src='../../images/adsImages/"+data.simpUser_AdsImg+"'>")
                $("#productTitle").text(data.simpUser_AdsTitle)
                $("#productPostId").text(data.sipmuser_PostId)
                $("#productDescription").text(data.sipmUser_AdsDescripion)
                $("#productType").text(data.sipmUser_AdsType)
                $("#ProductCate").text(data.sipmUser_AdsCategory)
                $("#ProductContactName").text(data.sipmUser_AdsContactName)
                $("#ProductAddress").text(data.sipmUser_AdsContactAddress)
                $("#productEmail").text(data.sipmUser_AdsContactEmail)
                $("#productContact").text(data.sipmUser_AdsContactNumber)
            }
        });
    })

})