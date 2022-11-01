$(document).ready(function () { 

    $("#product_Search").submit(function (e) { 
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
 })