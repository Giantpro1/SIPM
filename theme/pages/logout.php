<?php
session_start();

unset($_SESSION['ourUser']);
header("location:login");