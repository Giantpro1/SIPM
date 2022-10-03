
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
})