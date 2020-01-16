<?php
include("acceso/conex.php");
header("Content-type:application/vnd.ms-excel");
$hoy = date("Y-m-d");
header("Content-Disposition: attachment; filename=InventarioBienes$hoy.xls");
?>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <table  border="1" cellpadding="1" cellspacing="1">

        <tr>
          <td><strong>Número de bien</strong></td>
          <td><strong>Descripción</strong></td>
          <td><strong>Fecha de Adquisición</strong></td>
          <td><strong>Costo de Adquisición</strong></td>
          <td><strong>Descripción de Oficina</strong></td>
          <td><strong>Descripción de Nucleo</strong></td>
          <td><strong>Descripción de Movimiento</strong></td>
          <td><strong>Tipo de Movimiento</strong></td>
          <td><strong>Fecha de Movimiento</strong></td>
          <td><strong>Nº de Acta</strong></td>
          <td><strong>Color</strong></td>
          <td><strong>Marca</strong></td>
          <td><strong>Modelo</strong></td>
          <td><strong>Serial</strong></td>
          <td><strong>Orden</strong></td>
          <td><strong>Factura</strong></td>
          <td><strong>Observaciones</strong></td>
        </tr>

        <?php
          

          $sql="SELECT DISTINCT bienes.NUMERO_BIEN_NACIONAL,bienes.DESCRIPCION_BIEN, bienes.FECHA_ADQUISICION, bienes.COSTO_ADQUISICION, bienes.DescripcionOficina, bienes.DescripcionNucleo,bienes.DESCRIPCION_TIPO_MOVIMIENTO,bienes.TIPO_MOVIMIENTO,bienes.FECHA_MOVIMIENTO, bienes.ACTA, bienes.COLOR, bienes.MARCA,bienes.MODELO,bienes.SERIAL, bienes.ORDEN, bienes.FACTURA,bienes.OBSERVACIONES FROM bienes ORDER BY bienes.DescripcionOficina"; 

          $res=mysqli_query($conex,$sql);
          while($data=mysqli_fetch_array($res)){  
?>
          <tr>
            <td><?php echo $data["NUMERO_BIEN_NACIONAL"];?></td>
            <td><?php echo $data["DESCRIPCION_BIEN"];?></td>
            <td><?php echo $data["FECHA_ADQUISICION"];?></td>
            <td><?php echo $data["COSTO_ADQUISICION"];?></td>
            <td><?php echo $data["DescripcionOficina"];?></td>
            <td><?php echo $data["DescripcionNucleo"];?> </td>
            <td><?php echo $data["DESCRIPCION_TIPO_MOVIMIENTO"];?></td>
            <td><?php echo $data["TIPO_MOVIMIENTO"];?></td>
            <td><?php echo $data["FECHA_MOVIMIENTO"];?> </td>
            <td><?php echo $data["ACTA"];?></td>
            <td><?php echo $data["COLOR"];?></td>
            <td><?php echo $data["MARCA"];?></td>
            <td><?php echo $data["MODELO"];?> </td>
            <td><?php echo $data["SERIAL"];?></td>
            <td><?php echo $data["ORDEN"];?></td>
            <td><?php echo $data["FACTURA"];?></td>
            <td><?php echo $data["OBSERVACIONES"];?> </td>
          </tr>

        <?php
             
          }  
       ?> 
          
      </table>
     