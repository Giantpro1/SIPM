$(document).ready(function(){

    //display pendind Ads
        displayPendingAds()
    function displayPendingAds(){
        $.ajax({
            url: '../controller/process.php',
            method: 'POST',
            data: {action: 'displayPendAds'},
            success: function(response){
                console.log(response)
                $("#displayPendingAds").html(response)
            }
        })
    }

    //delete Ads
    $('body').on('click', '.deleteSimpUserAd', function(e){
        e.preventDefault()
        deleteAds = $(this).attr('id')

        swal.fire({
            title: 'Delete?',
            text: 'Are you sure you want to delete this Ads?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#FF0000",
            cancelButtonColor: 'blue',
            confirmButtonText: 'Delete Ads'
        }).then((result)=>{
            if(result.value){
            $.ajax({
                url: '../controller/process.php',
                method: 'POST',
                data: {deleteAds: deleteAds},
                success: function(response){
                    swal.fire({
                    icon: 'success',
                    text: 'You have successfully deleted your Ads',
                    title: 'Ads Deleted'
                    }).then(location.reload())
                    displayPendingAds()
                }
            })
            }
        })
        })
    })