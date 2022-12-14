<?php 
require 'dbc.php';

$Admindb = new Dbc;

// fetch pending users

if(isset($_POST['action']) && $_POST['action'] === 'displayUser'){
  $output = '';
  $data = $Admindb->fetchPendingUser(0);
 $i = 0;
 if($data){
    foreach($data as $dataFetch){
        if($dataFetch['sipmUser_Verify'] == 0){
            $userStatus = "not verified";
        }else{
            $userStatus = "verified";
        }
        $output .= '
        <tr>
        <td>'.++$i.'</td>
        <td class="py-0">
          <img src="'.'../'.$dataFetch['sipmUser_ProfileImg'].'" class="user-image rounded-circle" alt="profile Image">
        </td>
        <td>'.$dataFetch['simp_UserName'].'</td>
        <td>'.$dataFetch['unique_id'].'</td>
        <td>'.$dataFetch['simpUser_Email'].'</td>
        <td>'.$dataFetch['sipmUser_FirstName'].'</td>
        <td>'.$dataFetch['sipmUser_SecondName'].'</td>
        <td>
          <div id="tbl-chart-01">'.$userStatus.'</div>
        </td>
        <td>'.date('F j, Y', strtotime($dataFetch['simpUserReg_Date'])).'</td>
        <td>
        <button data-toggle="modal" id="'.$dataFetch['id'].'" title="view user" data-target="#viewUserDetails" class="btn btn-info p-0 px-1 mb-1 viewUser"><i class="fa fa-eye"></i></button>
        <button title="approve user" id="'.$dataFetch['id'].'" class="btn btn-success verifyUser p-0 px-1"><i class="fa fa-check"></i></button>
        </td>
      </tr>';
    }
    echo $output;
 }else{
    echo "you did not have any pending user";
 }
 
}

// fetch verify users
if(isset($_POST['action']) && $_POST['action'] === 'displayVerifyUser'){
  $output = '';
  $data = $Admindb->fetchVerifyUser(1);
 $i = 0;
 if($data){
    foreach($data as $dataFetch){
        if($dataFetch['sipmUser_Verify'] == 0){
            $userStatus = "not verified";
        }else{
            $userStatus = "verified";
        }
        $output .= '
        <tr>
        <td>'.++$i.'</td>
        <td class="py-0">
          <img src="'.'../'.$dataFetch['sipmUser_ProfileImg'].'" class="user-image rounded-circle" alt="Product Image">
        </td>
        <td>'.$dataFetch['simp_UserName'].'</td>
        <td>'.$dataFetch['unique_id'].'</td>
        <td>'.$dataFetch['simpUser_Email'].'</td>
        <td>'.$dataFetch['sipmUser_FirstName'].'</td>
        <td>'.$dataFetch['sipmUser_SecondName'].'</td>
        <td>
          <div id="tbl-chart-01">'.$userStatus.'</div>
        </td>
        <td>'.date('F j, Y', strtotime($dataFetch['simpUserReg_Date'])).'</td>
        <td>
        <button data-toggle="modal" title="view user" id="'.$dataFetch['id'].'" data-target="#viewUserDetails" class="btn btn-info viewUser p-0 px-1 mb-1"><i class="fa fa-eye"></i></button>
        <button title="disapprover user" id="'.$dataFetch['id'].'"  class="btn btn-warning disapproveUser p-0 px-1"><i class="fa fa-times"></i></button>
        </td>
      </tr>';
    }
    echo $output;
 }else{
    $reul = '<h4 class="text-info text-center" >you did not have any approved user</h4>';
    echo $reul;
 }

}

    // verify users 
    if(isset($_POST['verifyUser'])){
        $id = $_POST['verifyUser'];
        $verifyUser = $Admindb-> verifyUser($id, 1);
    }

    // fetch disapprove users
if(isset($_POST['action']) && $_POST['action'] === 'displayDisApproveUser'){
  $output = '';
  $data = $Admindb->fetchDisapprovedUser(2);
 $i = 0;
 if($data){
    foreach($data as $dataFetch){
        if($dataFetch['sipmUser_Verify'] == 1){
            $userStatus = "verified";
        }else{
            $userStatus = "suspended";
        }
        $output .= '
        <tr>
        <td>'.++$i.'</td>
        <td class="py-0">
          <img src="'.'../'.$dataFetch['sipmUser_ProfileImg'].'" class="user-image rounded-circle" alt="Product Image">
        </td>
        <td>'.$dataFetch['simp_UserName'].'</td>
        <td>'.$dataFetch['unique_id'].'</td>
        <td>'.$dataFetch['simpUser_Email'].'</td>
        <td>'.$dataFetch['sipmUser_FirstName'].'</td>
        <td>'.$dataFetch['sipmUser_SecondName'].'</td>
        <td>
          <div id="tbl-chart-01">'.$userStatus.'</div>
        </td>
        <td>'.date('F j, Y', strtotime($dataFetch['simpUserReg_Date'])).'</td>
        <td>
        <button data-toggle="modal" id="'.$dataFetch['id'].'" title="view user" data-target="#viewUserDetails" class="btn btn-info viewUser p-0 px-1 mb-1"><i class="fa fa-eye"></i></button>
        <button title="delete user" id="'.$dataFetch['id'].'" class="btn btn-danger deleteUser p-0 px-1"><i class="fa fa-trash"></i></button>
        <button title="verify user" id="'.$dataFetch['id'].'" class="btn btn-success verifyUser p-0 px-1"><i class="fa fa-check"></i></button>
        </td>
      </tr>';
    }
    echo $output;
 }else{
    $reul = '<h4 class="text-info text-center" >you did not have any disapproves user</h4>';
    echo $reul;
 }

}

    // Delete users 
    if(isset($_POST['deleteUser'])){
      $id = $_POST['deleteUser'];
      $deleteUser = $Admindb-> deleteUser($id, 3);
  }
 // count pending acct

 if(isset($_POST['action']) && $_POST['action'] === 'CountPendingAcct'){
  $countPendAcct = $Admindb->countAccStatus(0);
  echo $countPendAcct;
 }

// count verify acct
 if(isset($_POST['action']) && $_POST['action'] === 'CountVerifyAcct'){
  $countPendAcct = $Admindb->countAccStatus(1);
  echo $countPendAcct;
 }
// count disapprove acct
 if(isset($_POST['action']) && $_POST['action'] === 'CountDisapprovedAcct'){
  $countPendAcct = $Admindb->countAccStatus(2);
  echo $countPendAcct;
 }
