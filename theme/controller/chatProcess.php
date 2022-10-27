<?php 
require 'session.php';

if(isset($_POST['message'])){
$incoming_id = $sipmCur_User->test_input($_POST['incoming_id']);
$message = $sipmCur_User->test_input($_POST['message']);
$insertChat = $sipmCur_User->insertChat($incoming_id, $simpUserUnique_Id, $message);
$getChat = $sipmCur_User->getChat($incoming_id, $simpUserUnique_Id);
echo $getChat;
$output = '';
if($getChat){
    foreach($getChat as $insertChats){
        if($insertChats['outGoingMessId'] === $simpUserUnique_Id){
            echo $insertChats['sipmUser_Mess'];
            $output .= '<div class="chat outgoing">
                        <div class="details">
                            <p>'. $insertChats['sipmUser_Mess'] .'</p>
                        </div>
                        </div>';
        }else{
            $output .= '<div class="chat incoming">
                        <img src="../images/uploadImg/'.$insertChats['sipmUser_ProfileImg'].'" alt="">
                        <div class="details">
                            <p>'. $insertChats['sipmUser_Mess'] .'</p>
                        </div>
                        </div>';
        }
    }
}else{
    $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
}
echo $output;
}