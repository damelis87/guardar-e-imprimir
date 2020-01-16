<?php 

include('acceso/session.php');

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bienes Nacionales</title>
		<link rel="shortcut icon" href="img/impmlogo.ico"/>
		<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="iconic.css" media="screen" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="prefix-free.js"></script>
	</head>

<body>

	<div class="wrap">
	<br>
	<img src="img/logoimpm.png" alt="" height="100" width="500">
	<hr>
	
<nav>
		<ul class="menu">
			<li><a href="index3.php"><span class="iconic home"></span>Inicio</a></li>
			<li><a href="#"><span class="iconic plus-alt"></span> Agregar Bien</a>
				<ul>
					<li><a href="incorporacion.php">Incorporación</a></li>
					<li><a href="donacion.php">Donación</a></li>
					<li><a href="desincorporacion-bien.php">Desincorporación</a></li>
					<li><a href="reasignacion.php">Reasignación</a></li>
					<li><a href="traslado.php">Traslado</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic map-pin"></span> Modificar</a>
				<ul>
					<li><a href="acta.php">Acta</a></li>
					<li><a href="ubicacion.php">Ubicación</a></li>
					<li><a href="inventario.php">Inventario</a></li>
					<li><a href="bien.php">Bien Nacional</a></li>
					<li><a href="n_bien.php">Nro. Bien</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic magnifying-glass"></span> Consultas</a>
				<ul>
					<li><a href="m_bien.php">Movimiento por Bien</a></li>
					<li><a href="m_dependencia">Movimiento por Dependencia</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic mail"></span>Reportes</a>
				<ul>
					<li><a href="inventario-depen.php">Inventario por Unidad Administrativa</a></li>
					<li><a href="mova_bien.php">Movimiento Anual por Bien</a></li>
					<li><a href="reporteexcel.php">Inventario General(EXCEL)</a></li>
					<li><a href="reportepdf.php">Inventario General(PDF)</a></li>
					<li><a href="incorp.php">Incorporación</a></li>
					<li><a href="desin.php">Desincorporación</a></li>
					<li><a href="dona.php">Donaciones</a></li>
					<li><a href="trasl.php">Traslado</a></li>
					<li><a href="reasig.php">Reasignación</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic book"></span>Actas</a>
				<ul>
					<li><a href="imprimir.php">Imprimir</a></li>
					<li><a href="a_incor.ph">Incorporación</a></li>
					<li><a href="a_desen.php">Desincorporación</a></li>
					<li><a href="a_tras.php">Traslado</a></li>
				</ul>
			</li>
			<li><a href="Manual SUDEBIP.pdf" download="ManualDeSudebip"><span class="iconic document"></span>Manual Sudebip</a></li>
			<li><a href="usuario.php"><span class="iconic user"></span>Crear Usuario</a></li>
			<li><a href="acceso/Logout.php"><span class="iconic x"></span>Cerrar Sesión</a></li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>

<br><hr>

<br>


<!--
	<table class="table table-responsive table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Jhon</td>
				<td>Doe</td>
				<td>[email protected]</td>
			</tr>
			<tr>
				<td>Smith</td>
				<td>Thomas</td>
				<td>[email protected]</td>
			</tr>
			<tr>
				<td>Merry</td>
				<td>Jim</td>
				<td>[email protected]</td>
			</tr>
		</tbody>		
	</table>
-->


<center>

	<h2>Incorporación de Bienes</h2>
	<br><br>
	<form role="form" class="form-horizontal" action="bd_incon.php" method="POST">
<div class="form-inline">
<label for="acta">Nº Acta</label>
<input type="text" class="form-control" name="acta" value="AI- <?php echo rand(12345,67890)?>">
<label for="bien">Nº Bien Nacional</label>
<input type="text" class="form-control" name="bien" value="<?php echo rand(20000,100000)?>">
</div>
<br>

<div class="form-inline">
<select class="form-control input-sm" name="descripcion" id="descripcion">
	<option selected>Tipo de Bien</option>
	<option value="ACONDICIONADOR DE AIRE CÓNSOLA">ACONDICIONADOR DE AIRE CÓNSOLA</option>
	<option value="ACONDICIONADOR DE AIRE MINI SPLIT 18000 BTU">ACONDICIONADOR DE AIRE MINI SPLIT 18000 BTU</option>
	<option value="ACONDICIONADOR DE AIRE MINI SPLIT 24000 BTU">ACONDICIONADOR DE AIRE MINI SPLIT 24000 BTU</option>
	<option value="ACONDICIONADOR DE AIRE TIPO GABINETE DE 5 TONS.">ACONDICIONADOR DE AIRE TIPO GABINETE DE 5 TONS.</option>
	<option value="AIRE ACONDICIONAD 24.00BTU">AIRE ACONDICIONAD 24000BTU</option>
	<option value="AIRE ACONDICIONAD 12000BTU">AIRE ACONDICIONAD 12000BTU</option>
	<option value="AIRE ACONDICIONAD 18000BTU">AIRE ACONDICIONAD 18000BTU</option>
	<option value="AIRE ACONDICIONADO CENTRAL">AIRE ACONDICIONADO CENTRAL</option>
	<option value="AIRE ACONDICIONAD 36000BTU">AIRE ACONDICIONAD 36000BTU</option>
	<option value="ADAPTADOR DE CORRIENTE">ADAPTADOR DE CORRIENTE</option>
	<option value="ARCHIVADOR">ARCHIVADOR</option>
	<option value="ACCESS POINT">ACCESS POINT</option>
	<option value="ALA DE ESCRITORIO">ALA DE ESCRITORIO</option>
	<option value="AMPLIFICADOR">AMPLIFICADOR</option>
	<option value="AMPLIADORA DE FOTOS">AMPLIADORA DE FOTOS</option>
	<option value="AMPLIFICADOR BAJO">AMPLIFICADOR BAJO</option>
	<option value="ANTENA INALAMBRICA TIPOS PENDRIVE">ANTENA INALAMBRICA TIPOS PENDRIVE</option>
	<option value="ANTENA OMNIDICCIONAL,TIPO YAGI">ANTENA OMNIDICCIONAL,TIPO YAGI</option>
	<option value="ANTIFAZ">ANTIFAZ</option>
	<option value="APUNTADOR LASER DE RETROPROYECTOR">APUNTADOR LASER DE RETROPROYECTOR</option>
	<option value="ARCHIVADOR  DE METAL">ARCHIVADOR  DE METAL</option>
	<option value="ARCHIVADOR  DE METAL, DE 3 GAV">ARCHIVADOR  DE METAL, DE 3 GAV</option>
	<option value="ARCHIVADOR DE FORMICA">ARCHIVADOR DE FORMICA</option>
	<option value="ATRIL DE MICROFONO">ATRIL DE MICROFONO</option>
	<option value="ATRIL DE PARTITURA">ATRIL DE PARTITURA</option>
	<option value="ATRIL MUSICA PLEGABLE">ATRIL MUSICA PLEGABLE</option>
	<option value="AUDIFONO">AUDIFONO</option>
	<option value="AUTOCLAVE VITALE ALUMINIO">AUTOCLAVE VITALE ALUMINIO</option>
	<option value="AMPLIFICADOR DE GUITARRA">AMPLIFICADOR DE GUITARRA</option>
	<option value="BAJO ELECTRICO">BAJO ELECTRICO</option>
	<option value="BANCO DE METAL">BANCO DE METAL</option>
	<option value="BASE DE FOTOCOPIADORA">BASE DE FOTOCOPIADORA</option>
	<option value="BASE PARA MICROFONO">BASE PARA MICROFONO</option>
	<option value="BASTON DE ALUMINIO">BASTON DE ALUMINIO</option>
	<option value="BATERIA CULO E PUYA">BATERIA CULO E PUYA</option>
	<option value="BEBEDERO DE AGUA">BEBEDERO DE AGUA</option>
	<option value="BEBEDERO Y ENFRIADOR DE AGUA">BEBEDERO Y ENFRIADOR DE AGUA</option>
	<option value="BIBLIOTECA">BIBLIOTECA</option>
	<option value="BIBLIOTECA CON PUERTAS COMPLETA">BIBLIOTECA CON PUERTAS COMPLETA</option>
	<option value="BIBLIOTECA DE FORMICA,CON ENTREPAÑOS Y GAVETAS">BIBLIOTECA DE FORMICA,CON ENTREPAÑOS Y GAVETAS</option>
	<option value="BOMBA DE VACIO ELECTRONICA">BOMBA DE VACIO ELECTRONICA</option>
	<option value="BOMBA HIDRONEUMATICA">BOMBA HIDRONEUMATICA</option>
	<option value="BUTACAS DE METAL">BUTACAS DE METAL TAPIZ</option>
	<option value="CENTRAL TELEFONICA">CENTRAL TELEFONICA</option>
	<option value="C.P.U">C.P.U</option>
	<option value="CABLE PARA BAJO">CABLE PARA BAJO</option>
	<option value="CABLE PARA CUATRO">CABLE PARA CUATRO</option>
	<option value="CAFETERA">CAFETERA</option>
	<option value="CAJA ARITMETICA">CAJA ARITMETICA</option>
	<option value="CAJA DE METAL, GUARDA LLAVES">CAJA DE METAL, GUARDA LLAVES</option>
	<option value="CAJA FUERTE">CAJA FUERTE</option>
	<option value="CAJA FUERTE ELECTRONICA">CAJA FUERTE ELECTRONICA</option>
	<option value="CAJETIN DE PRIMEROS AUXILIOS">CAJETIN DE PRIMEROS AUXILIOS</option>
	<option value="CAJETIN GUARDA LLAVES DE PARED">CAJETIN GUARDA LLAVES DE PARED</option>
	<option value="CALCUALDORA">CALCUALDORA</option>
	<option value="CAMARA FILMADORA">CAMARA FILMADORA</option>
	<option value="CAMARA DE SEGURIDAD">CAMARA DE SEGURIDAD</option>
	<option value="CAMARA DIGITAL">CAMARA DIGITAL</option>
	<option value="CAMARA FOTOGRAFICA">CAMARA FOTOGRAFICA</option>
	<option value="CAMILLA FIJA DE METAL">CAMILLA FIJA DE METAL</option>
	<option value="CAMIÓN">CAMIÓN</option>
	<option value="CARRETILLA DE CARGA 10">CARRETILLA DE CARGA</option>
	<option value="CARRUCHA NEUMATICA">CARRUCHA NEUMATICA</option>
	<option value="CARTELARA DE ALUMINIO Y CORCHO">CARTELARA DE ALUMINIO Y CORCHO</option>
	<option value="CARTELERA DE HIERRO FORJADO">CARTELERA DE HIERRO FORJADO</option>
	<option value="CARTELERA DE MADERA 2 PUERTAS DE VIDRIO">CARTELERA DE MADERA 2 PUERTAS DE VIDRIO</option>
	<option value="CARTELERA DE MADERA EN FORMALINA">CARTELERA DE MADERA EN FORMALINA</option>
	<option value="CARTELERA DE MADERA TAMAÑO MEDIANA">CARTELERA DE MADERA TAMAÑO MEDIANA</option>
	<option value="CARTELERA DE MADERA Y CORCHO PEQUEÑA">CARTELERA DE MADERA Y CORCHO PEQUEÑA</option>
	<option value="CINTA MÉTRICA 30 MTS">CINTA MÉTRICA 30 MTS</option>
	<option value="CD-RW">CD-RW</option>
	<option value="DVD-RW">DVD-RW</option>
	<option value="COMPAGINADORA">COMPAGINADORA</option>
	<option value="COMPRESOR">COMPRESOR</option>
	<option value="COPIADORA E IMPRESORA(MULTIFUNCIONAL)">COPIADORA E IMPRESORA(MULTIFUNCIONAL)</option>
	<option value="CORNETAS PC">CORNETAS PC</option>
	<option value="CORNETA DE MADERA">CORNETA DE MADERA</option>
	<option value="CORTADORA DE PAPEL PARA CARNETS">CORTADORA DE PAPEL PARA CARNETS</option>
	<option value="CUADRO AL OLEO">CUADRO AL OLEO</option>
	<option value="CUATRO 4 CUERDAS">CUATRO 4 CUERDAS</option>
	<option value="CUATRO 5 CUERDAS">CUATRO 5 CUERDAS</option>
	<option value="CUMACO">CUMACO</option>
	<option value="DESMALEZADORA ELECTRICA">DESMALEZADORA ELECTRICA</option>
	<option value="DISCO DURO EXTERNO">DISCO DURO EXTERNO</option>
	<option value="DISPENSADOR DE AGUA DE BOTELLON">DISPENSADOR DE AGUA DE BOTELLON</option>
	<option value="DIVAN">DIVAN</option>
	<option value="DTU">DTU</option>
	<option value="DVD BLU-RAY">DVD BLU-RAY</option>
	<option value="DVD">DVD</option>
	<option value="ENCUADERNADORA">ENCUADERNADORA</option>
	<option value="ENFRIADOR DE AGUA (2 LLAVES)">ENFRIADOR DE AGUA (2 LLAVES)</option>
	<option value="ENGRAPADORA ELECTRICA">ENGRAPADORA ELECTRICA</option>
	<option value="EQUIPO 5 EN 1 (USB/SATA/IDE)">EQUIPO 5 EN 1 (USB/SATA/IDE)</option>
	<option value="EQUIPO CONTROLADOR DE ACCESO">EQUIPO CONTROLADOR DE ACCESO</option>
	<option value="EQUIPO DE SONIDO">EQUIPO DE SONIDO</option>
	<option value="ESCALERA DE ALUMINIO DE 10 PELDAÑOS">ESCALERA DE ALUMINIO DE 10 PELDAÑOS</option>
	<option value="ESCALERA DE ALUMINIO DE 12 PELDAÑOS">ESCALERA DE ALUMINIO DE 12 PELDAÑOS</option>
	<option value="EVAPORADORA">EVAPORADORA</option>
	<option value="EXTINTOR DE 10 LIBRAS">EXTINTOR DE 10 LIBRAS</option>
	<option value="EXTRACTOR DE AIRE FORZADO">EXTRACTOR DE AIRE FORZADO</option>
	<option value="ESTANTE">ESTANTE</option>
	<option value="FAX">FAX</option>
	<option value="FLIPPER EN FORMICA">FLIPPER EN FORMICA</option>
	<option value="FOTOCOPIADORA">FOTOCOPIADORA</option>
	<option value="GAVETERO ARTURITO">GAVETERO ARTURITO</option>
	<option value="GUILLOTINA">GUILLOTINA</option>
	<option value="HIDROLIMPIADOR">HIDROLIMPIADOR</option>
	<option value="IMPRESORA">IMPRESORA</option>
	<option value="IMPRESORA LASERJET">IMPRESORA LASERJET</option>
	<option value="INMUEBLE(LOTE DE TERRENO)">INMUEBLE(LOTE DE TERRENO)</option>
	<option value="JUEGO DE HERRAMIENTAS PARA EQUIPOS PC">JUEGO DE HERRAMIENTAS PARA EQUIPOS PC</option>
	<option value="KARDEX DE METAL">KARDEX DE METAL</option>
	<option value="LÁMPARA 2X40 ANTIPOLVO HERMETICA">LÁMPARA 2X40 ANTIPOLVO HERMETICA</option>
	<option value="LÁMPARA">LÁMPARA</option>
	<option value="LAMPARA DE EMERGENCIA FLUORESCENTE">LAMPARA DE EMERGENCIA FLUORESCENTE</option>
	<option value="LAMPARA DE PROTECCION DE PARED">LAMPARA DE PROTECCION DE PARED</option>
	<option value="LAMPARA DE TECHO">LAMPARA DE TECHO</option>
	<option value="LAPTOP">LAPTOP</option>
	<option value="LECTOR OPTICO">LECTOR OPTICO</option>
	<option value="LOCKER DE 2 PUERTAS">LOCKER DE 2 PUERTAS</option>
	<option value="MANDOLINA">MANDOLINA</option>
	<option value="MAQUINA DE ESCRIBIR">MAQUINA DE ESCRIBIR</option>
	<option value="MESA (PUPITRE) DE MADERA Y FORMICA">MESA (PUPITRE) DE MADERA Y FORMICA</option>
	<option value="MESA DE COMPUTADOR">MESA DE COMPUTADOR</option>
	<option value="MESA DE CONFERENCIA REDONDA">MESA DE CONFERENCIA REDONDA</option>
	<option value="MESA DE DIBUJO TÉCNICO">MESA DE DIBUJO TÉCNICO</option>
	<option value="MESA DE ESCRITORIO DE MADERA, COL. MAD. (TRIANGULAR)">MESA DE ESCRITORIO DE MADERA, COL. MAD. (TRIANGULAR)</option>
	<option value="MESA PARA FOTOCOPIADORA E IMPRESORA">MESA PARA FOTOCOPIADORA E IMPRESORA</option>
	<option value="MESA DE MADERA">MESA DE MADERA</option>
	<option value="MONITOR LCD">MONITOR LCD</option>
	<option value="MONITOR LED">MONITOR LED</option>
	<option value="MOUSE">MOUSE</option>
	<option value="MUEBLE AEREO DE 5 (CINCO) COMPARTIMIENTO">MUEBLE AEREO DE 5 (CINCO) COMPARTIMIENTO</option>
	<option value="NEVERA EJECUTIVA">NEVERA EJECUTIVA</option>
	<option value="ÓRGANO ELECTRICO">ÓRGANO ELECTRICO</option>
	<option value="PAILA DE SAN MILLAN">PAILA DE SAN MILLAN</option>
	<option value="PALO TAMBORA">PALO TAMBORA</option>
	<option value="PANEL DE METAL">PANEL DE METAL</option>
	<option value="PANTALLA  PARA  RETROPROYECTOR">PANTALLA  PARA  RETROPROYECTOR</option>
	<option value="PAPELERA REDONDA CROMADA">PAPELERA REDONDA CROMADA</option>
	<option value="PAPELERA DE PLASTICO">PAPELERA DE PLASTICO</option>
	<option value="PARABAN DE REJILLAS">PARABAN DE REJILLAS</option>
	<option value="PARAL PARA CORNETAS">PARAL PARA CORNETAS</option>
	<option value="PARALES DOBLES">PARALES DOBLES</option>
	<option value="PERFORADORA DE PAPEL MANUAL">PERFORADORA DE PAPEL MANUAL</option>
	<option value="PERSIANA SEMI MADERA">PERSIANA SEMI MADERA</option>
	<option value="PERSIANA">PERSIANA</option>
	<option value="PESO DE BANDEJA PLASTICA">PESO DE BANDEJA PLASTICA</option>
	<option value="PICOT">PICOT</option>
	<option value="PIZARRA ACRILICA">PIZARRA ACRILICA</option>
	<option value="PIZARRA DE CORCHO,MARCO DE MADERA">PIZARRA DE CORCHO,MARCO DE MADERA</option>
	<option value="PIZARRA DE MADERA Y ACRILICO (PEQ.)">PIZARRA DE MADERA Y ACRILICO (PEQ.)</option>
	<option value="PIZARRA DE MADERA Y ACRILICO (GRANDE.)">PIZARRA DE MADERA Y ACRILICO (GRANDE.)</option>
	<option value="PIZARRA ELECTRONICA INTERACTIVA">PIZARRA ELECTRONICA INTERACTIVA</option>
	<option value="PIZARRA MAGNETICA">PIZARRA MAGNETICA</option>
	<option value="PIZARRA PORCELANIZADA">PIZARRA PORCELANIZADA</option>
	<option value="PLANTA DE OZONO PVC">PLANTA DE OZONO PVC</option>
	<option value="PLASTIFICADORA">PLASTIFICADORA</option>
	<option value="PORTAFOLIO DE ALUMINIO Y ACRÍLICO">PORTAFOLIO DE ALUMINIO Y ACRÍLICO</option>
	<option value="PROYECTOR">PROYECTOR</option>
	<option value="QUEMADOR DE EXTENSIL">QUEMADOR DE EXTENSIL</option>
	<option value="QUEMADOR DE PLANCHA">QUEMADOR DE PLANCHA</option>
	<option value="REBOBINADOR DE BETAMAX">REBOBINADOR DE BETAMAX</option>
	<option value="REFLECTOR DE LUZ">REFLECTOR DE LUZ</option>
	<option value="REGLETA">REGLETA</option>
	<option value="REGULADOR">REGULADOR</option>
	<option value="RELOJ DE AMPLIADORA">RELOJ DE AMPLIADORA</option>
	<option value="RELOJ DE PARED">RELOJ DE PARED</option>
	<option value="REGULADOR DE VOLTAJE">REGULADOR DE VOLTAJE MARCA.FORZA</option>
	<option value="REPRODUCTOR">REPRODUCTOR</option>
	<option value="RETRATO">RETRATO</option>
	<option value="RETROPOYECTOR">RETROPOYECTOR</option>
	<option value="ROTAFOLIO DE METAL Y FORMICA">ROTAFOLIO DE METAL Y FORMICA</option>
	<option value="ROTAFOLIO NO MAGNÉTICO PORTÁTIL">ROTAFOLIO NO MAGNÉTICO PORTÁTIL</option>
	<option value="ROUTER">ROUTER</option>
	<option value="ROUTER INALAMBRICO">ROUTER INALAMBRICO</option>
	<option value="SACAPUNTAS ELECTRICO">SACAPUNTAS ELECTRICO</option>
	<option value="SCANER">SCANER</option>
	<option value="SERVIDOR">SERVIDOR</option>
	<option value="SIILA DE VISITANTE">SIILA DE VISITANTE</option>
	<option value="SIILA EMILIA">SIILA EMILIA</option>
	<option value="SIILA GIRATORIA">SIILA GIRATORIA</option>
	<option value="SILLA EJECUTIVA (ERGONÓMICA)">SILLA EJECUTIVA (ERGONÓMICA)</option>
	<option value="SILLA EJECUTIVA">SILLA EJECUTIVA</option>
	<option value="SILLA SEMICUERO">SILLA SEMICUERO</option>
	<option value="SILLA EN METAL">SILLA EN METAL</option>
	<option value="SILLA FIJA SECRETARIAL">SILLA FIJA SECRETARIAL</option>
	<option value="SILLA FIJA DE CUERO">SILLA FIJA DE CUERO</option>
	<option value="SILLA FIJA DE MADERA">SILLA FIJA DE MADERA</option>
	<option value="SWITH">SWITH</option>
	<option value="TABIQUE SEPARADOR">TABIQUE SEPARADOR</option>
	<option value="TABURETE DE MADERA">TABURETE DE MADERA</option>
	<option value="TALADRO">TALADRO</option>
	<option value="TAMBORA GAITA GRANDE">TAMBORA GAITA GRANDE</option>
	<option value="TANQUE LISTO AUTOMATICO">TANQUE LISTO AUTOMATICO</option>
	<option value="TECLADO">TECLADO</option>
	<option value="TELEFAX">TELEFAX</option>
	<option value="TELEFONERA DE FORMICA">TELEFONERA DE FORMICA</option>
	<option value="TELEFONERA DE MADERA">TELEFONERA DE MADERA</option>
	<option value="TELEFONO FAX">TELEFONO FAX</option>
	<option value="TELEFONO FIJO">TELEFONO FIJO</option>
	<option value="TELEFONO INALAMBRICO">TELEFONO INALAMBRICO</option>
	<option value="TELEVISOR">TELEVISOR</option>
	<option value="TENSIOMETRO DE PEDESTAL">TENSIOMETRO DE PEDESTAL</option>
	<option value="TRACTOR CORTA GRAMA">TRACTOR CORTA GRAMA</option>
	<option value="TRANSFORMADOR">TRANSFORMADOR</option>
	<option value="TRIPOIDE PARA CAMARA">TRIPOIDE PARA CAMARA</option>
	<option value="TROQUELADORA DE CHEQUES">TROQUELADORA DE CHEQUES</option>
	<option value="U.P.S">U.P.S</option>
	<option value="UNIDAD DE CINTA DE RESPALDO">UNIDAD DE CINTA DE RESPALDO</option>
	<option value="VENTILADOR DE TECHO">VENTILADOR DE TECHO</option>
	<option value="VENTILADOR FIJO">VENTILADOR FIJO</option>
	<option value="VENTILADOR PEDESTAL">VENTILADOR PEDESTAL</option>
	<option value="VHS">VHS</option>
	<option value="VIDEO BEAM">VIDEO BEAM</option>
	<option value="WEB CAN GENIUS">WEB CAN GENIUS</option>
</select>

<label for="opcional">Descripción(Opcional)</label>
<input type="text" class="form-control" name="opcional" placeholder="Descripción">

</div>
<br>

<div class="form-inline">
<select class="form-control input-sm" name="color" id="color">
	<option selected>Color</option>
	<optgroup label="Rojo">
    <option value="Rojo">Rojo</option>
    <option value="Escarlata">Escarlata</option>
    <option value="Granate">Granate</option>
    <option value="Carmin">Carmin</option>
    <option value="Amaranto">Amaranto</option>
  </optgroup>

  <optgroup label="Verde">
    <option value="Verde">Verde</option>
  </optgroup>

  <optgroup label="Azul">
    <option value="Azul">Azul</option>
  </optgroup>

  <optgroup label="Magenta">
    <option value="Magenta">Magenta</option>
    <option value="Fucsia">Fucsia</option>
    <option value="Morado">Morado</option>
    <option value="Lila">Lila</option>
    <option value="Salmón">Salmón</option>
    <option value="Rosa">Rosa</option>
  </optgroup>

	<optgroup label="Cian">
		<option value="Cian">Cian</option>
		<option value="Turquesa">Turquesa</option>
		<option value="Celeste">Celeste</option>
		<option value="Aquamarina">Aquamarina</option>
	</optgroup>

	<optgroup label="Amarillo">
		<option value="Amarillo">Amarillo</option>
		<option value="Oro">Oro</option>
		<option value="Dorado">Dorado</option>
		<option value="">Ambar</option>
	</optgroup>

	<optgroup label="Marrón">
		<option value="Marrón">Marrón</option>
		<option value="Cafe">Cafe</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Caqui">Caqui</option>
		<option value="Castaño">Castaño</option>
		<option value="Ocre">Ocre</option>
	</optgroup>

	<optgroup label="Violeta">
		<option value="Violeta">Violeta</option>
		<option value="Purpura">Purpura</option>
	</optgroup>

	<optgroup label="Naranja">
		<option value="Naranja">Naranja</option>
		<option value="Zanahoria">Zanahoria</option>
		<option value="Beige">Beige</option>
		<option value="">Durazno</option>
	</optgroup>

	<optgroup label="Blanco">
		<option value="Blanco">Blanco</option>
		<option value="Marfil">Marfil</option>
		<option value="Plata">Plata</option>
		<option value="Gris">Gris</option>
		<option value="Negro">Negro</option>
	</optgroup>
</select>

<select class="form-control input-sm" name="marca" id="marca">
	<option selected>Marca</option>
	<option value="3M">3M</option>
	<option value="ACER">ACER</option>
	<option value=" AVITEK"> AVITEK</option>
	<option value="ABC">ABC</option>
	<option value="ABDICK">ABDICK</option>
	<option value="ADLER">ADLER</option>
	<option value="AITEG">AITEG</option>
	<option value="AKILES">AKILES</option>
	<option value="AMD">AMD</option>
	<option value="ANTICOLD">ANTICOLD</option>
	<option value="ANVIL">ANVIL</option>
	<option value="AOC">AOC</option>
	<option value="APC">APC</option>
	<option value="APSCO">APSCO</option>
	<option value="ARCHIMOVIL">ARCHIMOVIL</option>
	<option value="AVTEK">AVTEK</option>
	<option value="BEEL PHONES">BEEL PHONES</option>
	<option value="BENQ">BENQ</option>
	<option value="BIO PLUS">BIO PLUS</option>
	<option value="BLACK & DECKER">BLACK & DECKER</option>
	<option value="BOSCH">BOSCH</option>
	<option value="BOSTON">BOSTON</option>
	<option value="BPS">BPS</option>
	<option value="BRITHE">BRITHE</option>
	<option value="CASIO">CASIO</option>
	<option value="CORONET">CORONET</option>
	<option value="C.A.S.">C.A.S.</option>
	<option value="CAM">CAM</option>
	<option value="CANON">CANON</option>
	<option value="CAP">CAP</option>
	<option value="CARRIER">CARRIER</option>
	<option value="CDP">CDP</option>
	<option value="CHEVROLET">CHEVROLET</option>
	<option value="CISCO SISTEM">CISCO SISTEM</option>
	<option value="CLEAR WATER">CLEAR WATER</option>
	<option value="CLIMAR">CLIMAR</option>
	<option value="CLONE">CLONE</option>
	<option value="COBY">COBY</option>
	<option value="COMFORT">COMFORT</option>
	<option value="COMPUCORP">COMPUCORP</option>
	<option value="CRISTAL">CRISTAL</option>
	<option value="DAEWOO">DAEWOO</option>
	<option value="DELCOP">DELCOP</option>
	<option value="DELL">DELL</option>
	<option value="DETROIT">DETROIT</option>
	<option value="D-LINK">D-LINK</option>
	<option value="DUCTON">DUCTON</option>
	<option value="EAGLE">EAGLE</option>
	<option value="EK">EK</option>
	<option value="ELECTROLUX">ELECTROLUX</option>
	<option value="ELECTROSONIC">ELECTROSONIC</option>
	<option value="ELITE SCREEN">ELITE SCREEN</option>
	<option value="EMERALD">EMERALD</option>
	<option value="ENERGIZER">ENERGIZER</option>
	<option value="ENFICITY">ENFICITY</option>
	<option value="ENFRIAVEN">ENFRIAVEN</option>
	<option value="EPSON">EPSON</option>
	<option value="ETERNA">ETERNA</option>
	<option value="EUROSET">EUROSET</option>
	<option value="FORD">FORD</option>
	<option value="FRIGIDAIRE">FRIGIDAIRE</option>
	<option value="FRIGILUX">FRIGILUX</option>
	<option value="GENERAL ELECTRIC">GENERAL ELECTRIC</option>
	<option value="GESTETNER">GESTETNER</option>
	<option value="GLORYS">GLORYS</option>
	<option value="GOLSTAR">GOLSTAR</option>
	<option value="HEINE GAMMA">HEINE GAMMA</option>
	<option value="HELEWT PACKARD (HP)">HELEWT PACKARD (HP)</option>
	<option value="HITACHI">HITACHI</option>
	<option value="HYUNDAI">HYUNDAI</option>
	<option value="IBBL">IBBL</option>
	<option value="IBLL">IBLL</option>
	<option value="IBM">IBM</option>
	<option value="IMEXX">IMEXX</option>
	<option value="INFINITY">INFINITY</option>
	<option value="INFOCUS">INFOCUS</option>
	<option value="INGENIUS">INGENIUS</option>
	<option value="INNOVAIR">INNOVAIR</option>
	<option value="INTEGRA">INTEGRA</option>
	<option value="INTEL">INTEL</option>
	<option value="IVECO">IVECO</option>
	<option value="JEMIP">JEMIP</option>
	<option value="KBOX">KBOX</option>
	<option value="KEVOR">KEVOR</option>
	<option value="KODAK">KODAK</option>
	<option value="KODE">KODE</option>
	<option value="KW">KW</option>
	<option value="KWTRO">KWTRO</option>
	<option value="LCD">LCD</option>
	<option value="LENNOX">LENNOX</option>
	<option value="LG">LG</option>
	<option value="LINCONL">LINCONL</option>
	<option value="LINK-NET">LINK-NET</option>
	<option value="MABE">MABE</option>
	<option value="MAKITA">MAKITA</option>
	<option value="MARKVISION">MARKVISION</option>
	<option value="MR.COFFEE">MR.COFFEE</option>
	<option value="NETWORKS">NETWORKS</option>
	<option value="NORTEL">NORTEL</option>
	<option value="NORTEL WORK">NORTEL WORK</option>
	<option value="OLIVETTI">OLIVETTI</option>
	<option value="OLYMPIA">OLYMPIA</option>
	<option value="OMEGA">OMEGA</option>
	<option value="OPRINTA">OPRINTA</option>
	<option value="OPSCAN">OPSCAN</option>
	<option value="OSTER">OSTER</option>
	<option value="PANASONIC">PANASONIC</option>
	<option value="PARKER">PARKER</option>
	<option value="PEAKE">PEAKE</option>
	<option value="PHILIPS">PHILIPS</option>
	<option value="POLAROID">POLAROID</option>
	<option value="POWER LINE">POWER LINE</option>
	<option value="PREMIUN">PREMIUN</option>
	<option value="PROFIERE">PROFIERE</option>
	<option value="PROTOOL">PROTOOL</option>
	<option value="RAPID">RAPID</option>
	<option value="READY">READY</option>
	<option value="RICOH">RICOH</option>
	<option value="RIDGID">RIDGID</option>
	<option value="RIVERA">RIVERA</option>
	<option value="RLS">RLS</option>
	<option value="ROTARY">ROTARY</option>
	<option value="ROYAL">ROYAL</option>
	<option value="SACUTA">SACUTA</option>
	<option value="SAFREVIEN">SAFREVIEN</option>
	<option value="SAMSUNG">SAMSUNG</option>
	<option value="SBA">SBA</option>
	<option value="SCITEC">SCITEC</option>
	<option value="SEIKO">SEIKO</option>
	<option value="SHARP">SHARP</option>
	<option value="SHURE">SHURE</option>
	<option value="SIEMENS">SIEMENS</option>
	<option value="SILEX">SILEX</option>
	<option value="SIRAGON">SIRAGON</option>
	<option value="SONEVIEW">SONEVIEW</option>
	<option value="SONY">SONY</option>
	<option value="STANLEY">STANLEY</option>
	<option value="SUN RAY">SUN RAY</option>
	<option value="SUZUKI">SUZUKI</option>
	<option value="TAKIMA">TAKIMA</option>
	<option value="TAPPAN">TAPPAN</option>
	<option value="TARGUS">TARGUS</option>
	<option value="TASHIN">TASHIN</option>
	<option value="TAURO">TAURO</option>
	<option value="TECAM">TECAM</option>
	<option value="TELENORMA">TELENORMA</option>
	<option value="TERMOTRONIC">TERMOTRONIC</option>
	<option value="TONAL">TONAL</option>
	<option value="TOSHIBA">TOSHIBA</option>
	<option value="TOYAMA">TOYAMA</option>
	<option value="TP-LINK">TP-LINK</option>
	<option value="TRIMMER">TRIMMER</option>
	<option value="VEHIDA">VEHIDA</option>
	<option value="VISION QUETS">VISION QUETS</option>
	<option value="VIT">VIT</option>
	<option value="WESTER DIGITAL">WESTER DIGITAL</option>
	<option value="WHIRPOLL">WHIRPOLL</option>
	<option value="WIDMER">WIDMER</option>
	<option value="WORKSTATION">WORKSTATION</option>
	<option value="X-ACTO">X-ACTO</option>
	<option value="XEROX">XEROX</option>
	<option value="ZEBRA">ZEBRA</option>
	<option value="ZUHIPOINT">ZUHIPOINT</option>
	<option value="ZUHITEC">ZUHITEC</option>
	<option value="VIEWSONIC">VIEWSONIC</option>
	<option value="DCALA">DCALA</option>
	<option value="FIRELINE">FIRELINE</option>
	<option value="ECOX">ECOX</option>
	<option value="SUNCO">SUNCO</option>
	<option value="ASUS">ASUS</option>
	<option value="AITA">AITA</option>
	<option value="INNOVAIR">INNOVAIR</option>
	<option value="GENIUS">GENIUS</option>
	<option value="PERVEY">PERVEY</option>
</select>

<label for="modelo">Modelo</label>
<input type="text" class="form-control" name="modelo">
</div>


<br>
<div class="form-inline">

<select class="form-control input-sm" name="clasifica">
	<option selected>Clasificación</option>
	<option value="1">Maquinas,Muebles y demás Equipos</option>
	<option value="102">Bienes Inmuebles</option>
	<option value="2"> Mobiliario y Enseres de Alojamiento</option>
	<option value="3">Maquinaria y demás Equipo de Construcción, Campo, Industria y Taller.</option>
	<option value="4">Equipo de Taller y Herramientas de uso General</option>
	<option value="5">Maquinaria  yequipo de Construcción y Conservación</option>
	<option value="6">Maquinaria y equipo para mantenimiento de automotores</option>
	<option value="7">Maquinaria e implementos Agrícolas y Pecuarios</option>
	<option value="8">Maquinaria e implementos de artes gráficas</option>
	<option value="9">Maquinaria Industrial</option>
	<option value="10">Equipos de Transporte</option>
	<option value="11">Vehículos Automotores</option>
	<option value="12">Otros Vehículos Terrestres</option>
	<option value="13">Material rodante ferroviario y de cables de transporte aereo</option>
	<option value="14">Equipos Auxiliares de Transporte</option>
	<option value="15">Embarcaciones</option>
	<option value="16">Aeronaves</option>
	<option value="17">Equipos de Telecomunicaciones</option>
	<option value="18">Equipos Médico-Quirúrgicos, DEntales y Veterinarios</option>
	<option value="19">Equipos Médico-Quirúrgicos y de Veterinaria</option>
	<option value="20">Equipos Dentales</option>
	<option value="21">Equipos Científicos y de Enseñanza</option>
	<option value="22">Equipos Científicos y de Laboratorios</option>
	<option value="23">Equipos de Enseñanza, Deporte y Recreación</option>
	<option value="24">Elementos del Culto</option>
	<option value="25">Colecciones Culturales, Artísticas e Históricas</option>
	<option value="26">Bibliotecas</option>
	<option value="27">Colecciones Científicas</option>
	<option value="28">Colecciones Artísticas y Ornamentales</option>
	<option value="29">Armamento y Equipos de Defensa</option>
	<option value="30">Instaladores Provisionales</option>
	<option value="31">Otros Elementos Devolutivos</option>
	<option value="32">Semovientes</option>
	<option value="33">Equipos de Procesamiento de Datos</option>
</select>

<label for="costo">Costo de Adq.</label>
<input type="text" class="form-control" name="costo" placeholder="Costo">
</div>

<br>
<div class="form-inline">

<select class="form-control input-sm" name="tipo">
	<option selected>Tipo de Movimiento</option>
	<option value="00">Incorporación por Traspaso</option>
	<option value="01">Compras</option>
	<option value="02">Construcción de Inmuebles</option>
	<option value="03">Adición y Mejoras</option>
	<option value="04">Producción de Elementos (muebles)</option>
	<option value="05">Suministro de Bienes de otras Entidades</option>
	<option value="06">Devolución de Bienes Prestados a Contratistas</option>
	<option value="07">Incorporación de Semovientes</option>
	<option value="8">Reconstrucción de Equipos</option>
	<option value="11">Incorporación por Donación</option>
	<option value="12">Incorporación por Permuta</option>
	<option value="13">Adscripción de Bienes Inmuebles</option>
	<option value="14">Omisión de Inventario</option>
	<option value="16">Incorporación por Cambio de Subgrupo</option>
	<option value="17">Corrección de Desincorporaciones</option>
	<option value="18">Incorporación por otros Conceptos</option>
	<option value="19">Incorporación de Muebles Procedentes de los Almacenes</option>
	<option value="20">Herencias Vacantes</option>
	<option value="21">Incorporado por Reasignación de Otra Dependencia</option>
	<option value="23">Compra por Distribuir</option>
</select>
</div>

<br>
<div class="form-inline">
<label for="fecha">Fecha Adquisición</label>
<input type="date" class="form-control" name="fecha">
<label for="orden">Orden Comp.</label>
<input type="text" class="form-control" name="orden" placeholder="Orden">
<label for="orden">N° Factura</label>
<input type="text" class="form-control" name="factura" placeholder="N°Factura">
</div>
<br>
<div class="form-inline">
<label for="serial">Serial</label>
<input type="text" class="form-control" name="serial" placeholder="Serial">
<label for="porcentaje">Salvamento</label>
<input type="text" class="form-control" name="porcentaje" placeholder="Porcentaje">
<label for="f_movi">Fecha Movimiento</label>
<input type="date" class="form-control" name="f_movi">
</div>

<br>
<div class="form-inline">
<label for="vida">Vida Util</label>
<input type="text" class="form-control" name="vida" placeholder="Vida">

<select class="form-control input-sm" name="depen">
		      <option selected>Extensión Académica</option>
			  <option value="1">SEDE CENTRAL</option>
			  <option value="5">EXT. ACADÉMICA EL TIGRE</option>
			  <option value="7">EXT. ACADÉMICA SAN FERNANDO DE APURE</option>
			  <option value="8">CENTRO DE ATENCIÓN ACHAGUAS</option>
			  <option value="9">CENTRO DE ATENCIÓN BRUZUAL</option>
			  <option value="10">CENTRO DE ATENCIÓN EL NULA </option>
			  <option value="11">CENTRO DE ATENCIÓN ELORZA</option>
			  <option value="12">CENTRO DE ATENCIÓN GUASDUALITO</option>
			  <option value="13">CENTRO DE ATENCIÓN MANTECAL</option>
			  <option value="14">EXT. BARINAS</option>
			  <option value="20">EXT. ACADÉMICA VALENCIA</option>
			  <option value="21">EXT. ACADÉMICA SAN CARLOS</option>
			  <option value="22">EXT. ACADÉMICA PUNTO FIJO</option>
			  <option value="23">EXT. FALCON</option>
			  <option value="25">EXT. PARAGUANA</option>
			  <option value="27">EXT. ACADÉMICA MERIDA</option>
			  <option value="31">EXT. ACADÉMICA BOCONO</option>
			  <option value="32">EXT. ACADÉMICA LOS TEQUES</option>
			  <option value="33">EXT. ACADÉMICA HIGUEROTE</option>
			  <option value="34">CENTRO DE ATENCION CARACAS</option>
			  <option value="35">EXT. ACADÉMICA LA GUAIRA</option>
			  <option value="39">EXT. ACADÉMICA LA ASUNCION</option>
			  <option value="40">EXT. ACADÉMICA GUANARE</option>
			  <option value="41">EXT. ACADÉMICA ACARIGUA</option>
			  <option value="42">EXT. ACADÉMICA CUMANA</option>
			  <option value="43">EXT. ACADÉMICA CARUPANO</option>
			  <option value="46">EXT. ACADÉMICA TUCUPITA</option>
			  <option value="47">EXT. ACADÉMICA SAN FELIPE</option>
			  <option value="48">EXT. ACADÉMICA MARACAIBO</option>
			  <option value="50">CENTRO DE ATENCIÓN PIACOA</option>
			  <option value="51">CENTRO DE ATENCIÓN BISCUCUY</option>
			  <option value="52">EXT. ACADÉMICA BARCELONA</option>
			  <option value="53">EXT. ACADÉMICA CIUDAD BOLIVAR</option>
			  <option value="56">EXT. ACADÉMICA SAN CRISTOBAL</option>
			  <option value="58">EXT. ACADÉMICA VALERA</option>
		</select>

		<select class="form-control input-sm" name="oficina" id="oficina">
			<option selected>Unidad Administrativa</option>
			<option value="192">Dirección</option>
			<option value="1051">Fundación UPEL-IMPM</option>
			<option value="176">Administración de Recursos Humanos</option>
			<option value="179">Asesoria Juridica</option>
			<option value="182">Consultoria Juridica</option>
			<option value="1062">Unidad de Planta Fisica de Mantenimiento y Servicios</option>
			<option value="216">Caja de Ahorros Prof. Jubilados(CAPJIMPM)</option>
			<option value="222">Preescolar</option>
			<option value="233">Sección de Elaboración y Reproducción. de Mat.</option>
			<option value="247">Secretaria</option>
			<option value="258">Subdirección de Docencia</option>
			<option value="259">Subdirección de Extensión</option>
			<option value="260">Subdirección de Investigación y Postgrado</option>
			<option value="264">Unidad de Curriculo</option>
			<option value="265">Unidad de Informática</option>
			<option value="266">Unidad de Personal</option>
			<option value="267">Unidad de Planificación y Desarrollo</option>
			<option value="271">Unidad de Desarrollo y Bienestar Estudiantil</option>
			<option value="273">Unidad de Tecnología Educativa</option>
			<option value="276">Caja de Ahorro(CAPTIMPM)</option>
			<option value="277">Caja de Ahorro(Prof. Activos)</option>
			<option value="278">Unidad de Administración</option>
			<option value="323">Sindicato(SITRAIMPM)</option>
			<option value="325">Oficina Delegada de Control Posterior</option>
			<option value="352">Comisión Electoral</option>
			<option value="1004">Asociación de Profesores (APROUPEL)</option>
			<option value="1005">Asociación de Profesores Jubilados</option>
			<option value="1010">Centro de Atención Caracas</option>
			<option value="1013">Comisión Clasificadora</option>
			<option value="1014">Cooperativa</option>
			<option value="1022">Salon Pabón(Planta baja)</option>
			<option value="1023">Salon Belkys Osorio</option>
			<option value="1033">Salon Romulo Gallegos</option>
			<option value="1035">Sindicato Obrero</option>
			<option value="268">Unidad de Información y Relaciones Publicas</option>
			<option value="190">Correspondencia</option>
			<option value="228">Sección Control de Estudios</option>
			<option value="229">Sección Correspondencia y Archivos</option>
			<option value="230">Sección de Admisión</option>
			<option value="237">Sección de Publicaciones</option>
			<option value="262">Unidad de Evaluación y Rendimiento Estudiantil</option>
			<option value="1017">Coordinación Programa de Educación Especial</option>
			<option value="1026">Deposito de Libros Material Instruccional(Docencia)</option>
			<option value="1037">Cordinación Pedagógia Social</option>
			<option value="1038">Coordinación Programa de Educación Integral</option>
			<option value="1040">Coordinación de Educación Preescolar</option>
			<option value="1052">Coordinación Generación de Relevo</option>
			<option value="249">Unidad de Biblioteca y Documentación</option>
			<option value="1061">Coordinación Proyectos Especiales</option>
			<option value="1018">Coordinación de Recreación y Deportes</option>
			<option value="1019">Coordinación Programa SocioCultural</option>
			<option value="1020">Coordinación Programa Tecnologia de la Información (TIC´S)</option>
			<option value="1021">Coordinación Programa Extensión Academica</option>
			<option value="1024">Unidad de Servicio a las Comunidades</option>
			<option value="1028">Aula 24 (Subdirección de Extensión)</option>
			<option value="1036">Aula 4 (Subdirección de Extensión)</option>
			<option value="1042">FONDEX</option>
			<option value="1053">Aula Prof. Luis Muñoz</option>
			<option value="187">Taller Postgrado</option>
			<option value="1100">Ambiente 19(Postgrado)</option>
			<option value="1007">Salon Ramon Camacho</option>
			<option value="1011">Centro de Investigación Educativa</option>
			<option value="1012">Salon Andres Bello</option>
			<option value="1015">Coordinación de Postgrado</option>
			<option value="10016">CENDIE</option>
			<option value="238">Sección de Registro y Control</option>
			<option value="242">Sección de Relaciones Laborales</option>
			<option value="245">Sección de Apoyo Técnico</option>
			<option value="1059">Sección de Estadisticas</option>
			<option value="1060">Sección de Evaluación y Programación</option>
			<option value="1048">Sección de Presupuesto</option>
			<option value="1049">Sección de Organización y Sistemas</option>
			<option value="1006">Auditorium</option>
			<option value="1029">Aula 20 (Relaciones Públicas)</option>
			<option value="1030">Aula 23 (Relaciones Públicas)</option>
			<option value="1031">Aula 5 (Relaciones Públicas)</option>
			<option value="1050">Aula Salud</option>
			<option value="1016">Distribución de Material Instruccional</option>
			<option value="1043">Tecnologia Educativa (Ofi 14)</option>
			<option value="1044">Tecnologia Educativa (Ofi 10)</option>
			<option value="1045">Tecnologia Educativa (Ofi 13)</option>
			<option value="1046">Tecnologia Educativa (Ofi 7 y 8)</option>
			<option value="1058">Almacen (Bienes Nacionales)</option>
			<option value="1064">Bienes Desincorporados en Deposito</option>
			<option value="225">Sección Bienes Nacionales</option>
			<option value="226">CAJA</option>
			<option value="227">Sección de Contabilidad</option>
			<option value="231">Sección de Adquisición y Suministros</option>
			<option value="232">Almacen</option>
			<option value="241">Sección Ejecución Presupuestaria</option>
			<option value="246">Sección Tesoreria</option>
			<option value="250">Servicio de Comedor</option>
			<option value="254">Servicio de Reproducción</option>
			<option value="263">Central Telefonica</option>
			<option value="1063">Bienes sin Ubicación</option>
			<option value="223">Sección de Plata Fisica</option>
			<option value="224">Sección de Mantenimiento</option>
			<option value="1224">Sección de Servicios</option>
		</select>
</div>
<br><br>

<h4><b>* Ingresar datos en letra mayuscula.</b></h4>
<br>
<button type="submit" class="btn btn-default">Enviar</button>
</form>
</center>

<hr>
<footer class="pie">
	<p align="center"><b>
	&copy Av. Romulo Gallegos cruce con Montecristo Edificio IMPM-UPEL Piso 1 Ofic 13.  Los Dos Caminos. Caracas.
	</p>
	<p align="center">Unidad de Informática. Sección de Desarrollo y Mantenimiento de <Sistemas></Sistemas>. IMPM-UPEL.</p></b>
</footer>
</body>



</html>