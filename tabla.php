<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/tabla.css">
    <title>Document</title>
</head>
<body>
    
  <?php session_start(); 
    $_SESSION['ventana']=null;
  ?>

    <h3>Datos ingresados</h3>
<div class="contenedor-tabla">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Ubicacion</th>
            <th>Sexo</th>
            <th>Documento</th>
            <th>Condiciones</th>
        </tr>
    
        <?php 
           if(isset($_SESSION['datos'])){
        ?>
                <tr>
            
                <td> <?php print_r( $_SESSION['datos']['nombre'] )?> </td>
                <td> <?php print_r($_SESSION['datos']['correo']) ?> </td>
                <td> <?php print_r($_SESSION['datos']['telefono']) ?> </td>
                <td> <?php print_r($_SESSION['datos']['ubicacion']) ?> </td>
                <td> <?php print_r($_SESSION['datos']['sexo']) ?> </td>
                <td> <?php echo "File" ?> </td>
                <td> <?php print_r($_SESSION['datos']['terminos']) ?> </td>
                
               </tr>
        <?php       
        }

        ?>
      
        <tr>
            <td>Jeskarin</td>
            <td>Jeskarin36@gmail.com</td>
            <td>042566251</td>
            <td>Caracas, Venezuela</td>
            <td>Mujer</td>
            <td>File</td>
            <td>Acepto</td>
        </tr>

        <tr>
            <td>Jose</td>
            <td>Jose32516@gmail.com</td>
            <td>04217451</td>
            <td>Caracas, Venezuela</td>
            <td>Hombre</td>
            <td>File</td>
            <td>Acepto</td>
        </tr>

        <tr>
            <td>Mari</td>
            <td>Maria06@gmail.com</td>
            <td>025502551</td>
            <td>Caracas, Venezuela</td>
            <td>Femenina</td>
            <td>File</td>
            <td>Acepto</td>
        </tr>


    </table>

    <button onClick="location.href='index.php'" class="btn-back">Volver</button>
</div>
 
<script type="text/javascript">
       window.onbeforeunload = function(){
           <?php session_destroy(); ?>
        }
</script>


</body>
</html>