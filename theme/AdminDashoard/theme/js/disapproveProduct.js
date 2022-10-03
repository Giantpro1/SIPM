
$(document).ready(function(){
    displayDisapproveProduct()
    function displayDisapproveProduct(){
        $.ajax({
            url: "../controller/productProccess.php",
            type: "POST",
            data: {action: 'displayDisapproveProduct'},
            success: function (response) {
                // console.log(response)
                // data  = JSON.parse(response)
                // console.log(data)
               $("#displayDisapproveProducts").html(response);
            }
        });
    }

           // approve Product account
           $('body').on('click', '.verifyProduct', function(e){
            e.preventDefault()
            verifyProduct = $(this).attr('id')
            Swal.fire({
              title: 'Verify?',
              text: 'Are you sure you want to approve this product?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: "#FF0000",
              cancelButtonColor: "blue",
              confirmButtonText: 'Verify Product'
            }).then((result)=>{
              if(result.value){
                $.ajax({
                    url:'../controller/productProccess.php',
                  method:'POST',
                  data: {verifyProduct: verifyProduct},
                  success: function(response){
                    console.log(response)
                    Swal.fire({
                    icon:'success',
                    text:'You have successfully approved this product',
                    title:'Product verified'
                  })
                  displayDisapproveProduct()
                  }
                })
              }
            })
           
          })

          $('body').on('click', '.viewProduct', function(e){
            e.preventDefault()
            viewDisapproveProduct = $(this).attr('id')
            // console.log(viewProduct)
    
            $.ajax({
                type: "POST",
                url: "../controller/productProccess.php",
                data:{viewDisapproveProduct:viewDisapproveProduct} ,
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