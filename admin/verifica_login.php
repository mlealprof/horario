<?php 
   session_start();

   if((!isset($_SESSION['senha']) == true) and (!isset($_SESSION['email']) == true))
   {
      unset($_SESSION['senha']);
      unset($_SESSION['email']); 
      header('location:../login.php');
   }else{
      $logado = $_SESSION['usuario'];
   }

?>