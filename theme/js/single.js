    displaySingleProduct()
function displaySingleProduct() {

    singleProduct = $(this).attr('id')
    // console.log(singleProduct)

        $.ajax({
            url: "./controller/index.php",
            type: "GET",
            data: {
                singleProduct:singleProduct
            },
            success: function (response) {
                // console.log(response)
                // data = JSON.parse(response)
                // console.log(data)
                // $(".col-lg-8").html(response);
            }
        });
  }