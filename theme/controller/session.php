<?php
session_start();

require_once 'dbc.php';

$sipmCur_User = new Dbc;

if (!isset($_SESSION['ourUser'])) {
    header('location:login');
    die();
  }

  $simp_Mail = $_SESSION['ourUser'];

  // $simpPostId = $_SESSION['userPostId'];

  $sipm_Data = $sipmCur_User->simp_CurrentUser($simp_Mail);

  // $simpUserPostId = $sipmCur_User->simpUserPostId($simpPostId);

  // $simp_PostId = $simpUserPostId['sipmuser_PostId'];

  $simp_Cid = $sipm_Data['id'];

  $simpUser_ProPic = $sipm_Data['sipmUser_ProfileImg'];

  $simpUserName = $sipm_Data['simp_UserName'];
  $simpFirstName = $sipm_Data['sipmUser_FirstName'];
  $simpSecondName = $sipm_Data['sipmUser_SecondName'];
  $simpCommunity = $sipm_Data['sipmUser_CommunityName'];
  $simpHidePro = $sipm_Data['sipmUser_HidePro'];
  $simpZipCode = $sipm_Data['simpUser_ZipCode'];
  $simpUserPass = $sipm_Data['simpUser_Password'];
  $simpUserRegDate = $sipm_Data['simpUserReg_Date'];
