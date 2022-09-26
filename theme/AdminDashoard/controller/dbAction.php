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
        <button data-toggle="modal" id="'.$dataFetch['id'].'" title="view user" data-target="#viewUserDetails" class="btn btn-info px-2 viewUser"><i class="fa fa-eye"></i></button>
        <button title="disapprover user" id="'.$dataFetch['id'].'" class="btn btn-warning disapproveUser px-2"><i class="fa fa-times"></i></button>
        <button title="approve user" id="'.$dataFetch['id'].'" class="btn btn-success verifyUser px-2"><i class="fa fa-check"></i></button>
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
        <button title="view user" class="btn btn-info px-2"><i class="fa fa-eye"></i></button>
        <button title="disapprover user" class="btn btn-warning px-2"><i class="fa fa-times"></i></button>
        <button title="delete user" class="btn btn-danger px-2"><i class="fa fa-trash"></i></button>
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
        <button title="view user" class="btn btn-info px-2"><i class="fa fa-eye"></i></button>
        <button title="delete user" class="btn btn-danger px-2"><i class="fa fa-trash"></i></button>
        <button title="verify user" class="btn btn-success px-2"><i class="fa fa-check"></i></button>
        </td>
      </tr>';
    }
    echo $output;
 }else{
    $reul = '<h4 class="text-info text-center" >you did not have any disapproves user</h4>';
    echo $reul;
 }

}