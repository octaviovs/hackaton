<?php
require_once '../controles/usuario.php';
session_start();


$miUsuario=$_SESSION["usuario"];





if (!empty($miUsuario)) {
      if(!empty($_POST)){
       

      
      // $miUsuario->registroCupon($_POST['datos'],$miUsuario['ID'],'2018-08-09');
	header("Location:cupones.php");
      
      }else{
        //  header("Location:registro.php ");
      }
}else{
   // header("Location:index.php ");
}
?>