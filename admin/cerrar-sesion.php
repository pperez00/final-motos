<?php session_start();
//session_destroy();
unset($_SESSION["ingreso"]);
header("Location:../index.php?sesion=logout");