<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>
   
  <?php session_start(); 
  

  if (isset($_SESSION["errores"])){ 
    $nombre= isset($_SESSION["errores"]['nombre'])? $_SESSION["errores"]['nombre']:null;
    $correo=isset($_SESSION["errores"]['correo'])? $_SESSION["errores"]['correo']:null;
    $telefono=isset($_SESSION["errores"]['telefono'])? $_SESSION["errores"]['telefono']:null;
    $ubicacion=isset($_SESSION["errores"]['ubicacion'])? $_SESSION["errores"]['ubicacion']:null;
    $sexo=isset($_SESSION["errores"]['sexo'])? $_SESSION["errores"]['sexo']:null;
    $file=isset($_SESSION["errores"]['file'])? $_SESSION["errores"]['file']:null;
    $terminos=isset($_SESSION["errores"]['terminos'])? $_SESSION["errores"]['terminos']:null;

    unset($_SESSION["errores"]);
    $_SESSION["errores"]="";
  
}


  ?>

    <section class="contenedor">
    
    

    <div class="contenedor-formulario" >
       <h3>Formulario en PHP</h3>
        <form action="formulario.php" method="post"class="formulario" enctype="multipart/form-data">
           <input type="text" name="nombre" id="nombre" placeholder="<?php echo isset($nombre) ? $nombre :"Nombre*"?>" class="<?php  echo isset($nombre) ? "error-rojo":""  ?>" >
           <input type="email" name="correo" id="correo" placeholder="<?php echo isset($correo) ? $correo :"Correo*"?>"  class="<?php  echo isset($correo) ? "error-rojo":""  ?>">
           <input type="number" name="telefono" id="telefono" placeholder="<?php echo isset($telefono) ? $telefono :"Telefono*"?>"  class="<?php  echo isset($telefono) ? "error-rojo":""  ?>">
           <input type="text" name="ubicacion" id="ubicacion" placeholder="<?php echo isset($ubicacion) ? $ubicacion :"Ubicacion*"?>"  class="<?php  echo isset($ubicacion) ? "error-rojo":""  ?>">
           <label for="sexo" id="style-error"><?php  echo isset($sexo) ? $sexo :""?></label>
                <div >
                    <label for="Hombre">Hombre <input type="radio" name="sexo" id="sexo" value="Hombre"></label>
                    <label for="Mujer">Mujer <input type="radio" name="sexo" id="sexo" value="Mujer"></label>
                    <label for="Viudo">Otro <input type="radio" name="sexo" id="sexo" value="viudo"></label>
                </div>
            <label id="style-error"><?php  echo isset($file) ? $file:""?></label>
            <label for="file" id="documento">Documento <input type="file" name="file" id="file"></label>
            <label id="style-error"><?php  echo isset($terminos) ? $terminos :""?></label>
            <label for="terminos">Acepto los terminos y condiciones: <input type="checkbox" name="terminos" id="terminos" value='acepto'></label>
            <input type="submit" name="submit" value="Enviar" id="btn-submit">
        </form>
       
       
    </div>
    
    <img src="./img/conifer-filling-in-personal-information.png" alt="" srcset="">

    <div class="modal" id="<?php if( isset($_SESSION['ventana'])){ echo 'ventana';} unset($_SESSION['ventana']);  ?>">
             <div class="modal-contenido">
                 <h3>Se han enviado correctamente sus datos!!</h3>
                 <button onClick="location.href='tabla.php'"  class="btn-ver" >Ver datos</button>
             </div>
        </div>
    </section>

  

  
</body>
</html>

