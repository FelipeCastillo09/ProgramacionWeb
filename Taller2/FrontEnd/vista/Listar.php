<table width="1000" border="10" style="background-color:#B3B7BB ">

      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tarjeta</th>
        <th>Titular</th>
        <th>NumeroTargeta</th>
        <th>CVV2</th>
        <th>Fecha</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>CodigoPostal</th>
        <th>Pais</th>
        <th>Celular</th>
        <th>CodigoSeguridad</th>
      </tr>

      <?php
      require 'C:\xampp\htdocs\Taller2\BackEnd\control\Conexion.php';
      $conexion = new Conexion(); //estable el objeto conexion
      $connection = $conexion -> conectar(); //guarda la conexion para realizar las consultas
      $listar = "SELECT * from Clientes";
      $resultado = mysqli_query($connection, $listar);
      mysqli_close($connection);

      $i = 0;

              while($fila = mysqli_fetch_array($resultado)){
                $Nombre=$fila['Nombre'];
                $Apellido=$fila['Apellido'];
                $Email=$fila['Email'];
                $Targeta=$fila['Targeta'];
                $Titular=$fila['Titular'];
                $NumeroTargeta=$fila['NumeroTargeta'];
                $CVV2=$fila['CVV2'];
                $Fecha=$fila['Fecha'];
                $Direccion=$fila['Direccion'];
                $Ciudad=$fila['Ciudad'];
                $CodigoPostal=$fila['CodigoPostal'];
                $Pais=$fila['Pais'];
                $Celular=$fila['Celular'];
                $CodigoSeguridad=$fila['CodigoSeguridad'];
                $i++;

       ?>

       <tr align="center">
         <td><?php echo $Nombre ?></td>
         <td><?php echo $Apellido ?></td>
         <td><?php echo $Email ?></td>
         <td><?php echo $Targeta ?></td>
         <td><?php echo $Titular ?></td>
         <td><?php echo $NumeroTargeta?></td>
         <td><?php echo $CVV2 ?></td>
         <td><?php echo $Fecha ?></td>
         <td><?php echo $Direccion ?></td>
         <td><?php echo $Ciudad ?></td>
         <td><?php echo $CodigoPostal ?></td>
         <td><?php echo $Pais ?></td>
         <td><?php echo $Celular ?></td>
         <td><?php echo $CodigoSeguridad ?></td>
       </tr>

     <?php } ?>

    </table>

     <input type="button" name="" value="MENU" onclick="location.href='Menu.php'" style='width:100px; height:50px'>
