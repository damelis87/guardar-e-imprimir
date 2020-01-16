<?php 

include('acceso/conex.php');

	$acta=$_POST['acta'];
	$bien=$_POST['bien'];
	$descripcion=$_POST['descripcion'];
	$opcional=$_POST['opcional'];
	$clasifica=$_POST['clasifica'];
	$costo=$_POST['costo'];
	$fecha=$_POST['fecha'];
	$orden=$_POST['orden'];
	$factura=$_POST['factura'];
	$serial=$_POST['serial'];
	$porcentaje=$_POST['porcentaje'];
	$f_movi=$_POST['f_movi'];
	$vida=$_POST['vida'];
	$depen=$_POST['depen'];
	$oficina=$_POST['oficina'];
	$tipo=$_POST['tipo'];
	$color=$_POST['color'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];


$sentencia="INSERT INTO bienes(NUMERO_BIEN_NACIONAL,DESCRIPCION_BIEN,FECHA_ADQUISICION,COSTO_ADQUISICION,DEPENDENCIA,CodigoNuc,CODIGO_CLASIFICACION,CODIGO_TIPO_MOVIMIENTO,FECHA_MOVIMIENTO,ACTA,COLOR,MARCA,MODELO,SERIAL,ORDEN,FACTURA,OBSERVACIONES) VALUES ('$bien', '$descripcion','$fecha','$costo','$oficina','$depen','$clasifica', '$tipo','$f_movi','$acta','$color','$marca','$modelo','$serial','$orden','$factura','$opcional')";

	 $resultado = mysqli_query($conex,$sentencia);


	if(!$resultado) 
	 die("Error: no se pudo realizar el INSERT");
	  else

	  	$iddrs = $_GET["iddrs"];

     header('Location:aceptar.php'. $iddrs);
 
	  echo "REGISTRO EXITOSO...";
 ?>