<?php 
require_once "Conexion.php";
 class Usuario
{
  public $ID;
	public $NOMBRE_USUARIO;
  public $CONTRASENA;
  public $NOMBRE;
  public $APELLIDOS;
  
	function __construct($NOMBRE_USUARIO,$CONTRASENA,$NOMBRE,$APELLIDOS)
	{
    $this->NOMBRE_USUARIO=$NOMBRE_USUARIO;
    $this->CONTRASENA=$CONTRASENA;
    $this->NOMBRE=$NOMBRE;
    $this->APELLIDOS=$APELLIDOS;
	}
 
  public function registro(){
      $bandera=false;
      try {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('INSERT INTO usuario(nombre,correo,clave) VALUES(:nombre,:correo,:clave)');
        $consulta->bindParam(':nombre', $this->nombre);
        $consulta->bindParam(':correo', $this->correo);
        $consulta->bindParam(':clave', $this->clave);
        $consulta->execute();
        $this->ultimoid=$conexion->lastInsertId();
        $bandera=true;
      } catch (Exception $e) {
        $bandera=false;
      }
      return $bandera;
   }
	public  function validar(){
      $bandera=false;
      $conexion = new Conexion();
      $consulta = $conexion->prepare('SELECT * FROM clientes WHERE NOMBRE_USUARIO =:NOMBRE_USUARIO AND CONTRASENA=:CONTRASENA');
      $consulta->bindParam(':NOMBRE_USUARIO', $this->NOMBRE_USUARIO);
      $consulta->bindParam(':CONTRASENA', $this->CONTRASENA);
      $consulta->execute();
      $registro = $consulta->fetch();
      if($registro){
       $this->ID=$registro['ID'];
       $this->NOMBRE=$registro['NOMBRE'];


 
          $bandera= true;
       }else{
         $bandera= false;
       }
       return $bandera;
   }
 
 
  public function listar($sql){
       $conexion = new Conexion();
       $consulta = $conexion->prepare($sql);
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
  }
 
  
  
  public function ModificarSolicitud($id,$correo,$estado){
      $bandera=false;
      try {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('UPDATE amigos'.$id.'  SET estado=:NuevoEstado  WHERE correo=:NuevoCorreo');
        $consulta->bindParam(':NuevoEstado', $estado);
        $consulta->bindParam(':NuevoCorreo', $correo);
        $consulta->execute();
       $bandera=true;
      } catch (Exception $e) {
        
      }
   }
  public function BajaSolicitud($tabla,$correo){
      $bandera=false;
      try {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE  FROM amigos'.$tabla.' WHERE correo=:BCorreo');
        $consulta->bindParam(':BCorreo', $correo);
        $consulta->execute();
        $bandera=true;
      } catch (Exception $e) {
        
      }
    }
}//llave clase
 ?>