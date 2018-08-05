<?php 
require_once "Conexion.php";
 class Usuario
{
  public $CODIGO;
  public $NUMERO_NEGOCIO;
  public $DESCRIPCION;
  public $LIMITE;
  public $DESCUENTO;
  public $QR;
  
	function __construct($codigo,$numero_negocio,$descripcion,$limite,$descuento,$qr)
	{
    $this->CODIGO=$codigo;
    $this->NUMERO_NEGOCIO=$numero_negocio;
    $this->DESCRIPCION=$descripcion;
    $this->LIMITE=$limite;
    $this->DESCUENTO=$descuento;
    $this->QR=$qr;
  }
  function __construct0()
	{
		
	}
 
  public function registro(){
      $bandera=false;
      try {
        $conexion = new Conexion();


        $consulta = $conexion->prepare('INSERT INTO `registro_cupones`(`NUM_REGISTRO`, `CODIGO_CUPON`, `ID_CLIENTE`, `FECHA`) VALUES  (:NUM_REGISTRO,:CODIGO_CUPON,:ID_CLIENTE,:FECHA)');
        $consulta->bindParam(':NUM_REGISTRO', $this->NUM_REGISTRO);
        $consulta->bindParam(':CODIGO_CUPON', $this->CODIGO_CUPON);
        $consulta->bindParam(':ID_CLIENTE', $this->ID_CLIENTE);
        $consulta->bindParam(':FECHA', $this->FECHA);
        
        $consulta->execute();
     
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