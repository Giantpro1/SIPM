

$(document).ready(function(){
    displayPendingProduct()
    function displayPendingProduct(){
        $.ajax({
            url: "../controller/productProccess.php",
            type: "POST",
            data: {action: 'displayPendProduct'},
            success: function (response) {
                // console.log(response)
                // data  = JSON.parse(response)
                // console.log(response)
               $("#displayPendingAds").html(response);
            }
        });
    }

    // view prduct

    $('body').on('click', '.viewProduct', function(e){
        e.preventDefault()
        viewProduct = $(this).attr('id')
        // console.log(viewProduct)

        $.ajax({
            type: "POST",
            url: "../controller/productProccess.php",
            data:{viewProduct:viewProduct} ,
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