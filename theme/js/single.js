$(document).ready(function () {
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

      $("#product_Search").submit(function(e) { 
        e.preventDefault()
        // request = $("#product_Search").val();
        // if(request){
            $.ajax({
                url: "../controller/singlePageProduct.php",
                type: "POST",
                data: $(this).serialize()+'&action=searchPro',
                success: function (response) {
                    // console.log(response)
                    $("#search_Result").html(response);
                }
            });
        // }
     });
});