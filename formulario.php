

    <?php 

function validarvalor($valor){
    if(trim($valor)==""){
        return false;
    }else{
        return true;
    }
}

function validarentero($entero,$opciones=null){
    if(filter_var($entero,FILTER_VALIDATE_INT,$opciones)==false){
        return false;
    }else{
        return true;
    }
}

function validaremail($valor){
    if(filter_var($valor,FILTER_VALIDATE_EMAIL)===false){
        return false;
    }else{
        return true;
    }
}

$errores= array();



if($_SERVER["REQUEST_METHOD"]=="POST"){  
    
   $nombre= isset($_POST["nombre"]) ? $_POST["nombre"] : null;
   $correo= isset($_POST["correo"]) ? $_POST["correo"]: null;
   $telefono= isset($_POST["telefono"])? $_POST["telefono"]:null;
   $ubicacion=isset($_POST["ubicacion"])? $_POST["ubicacion"]:null;
   $sexo = isset($_POST["sexo"])? $_POST["sexo"]:null;
   $file= isset($_FILES["file"])? $_FILES["file"]: null;
   $terminos= isset($_POST["terminos"])? $_POST["terminos"]:null;

  if(!validarvalor($nombre)){
    $errores['nombre']='El campo nombre es incorrecto*';
  }
  if(!validarvalor($correo)){
    $errores['correo']='El campo correo es incorrecto*';
  }
  if(!validarentero($telefono)){
    $errores['telefono']="El campo telefono es incorrecto*";
  }
  if(!validarvalor($ubicacion)){
    $errores['ubicacion']="El campo ubicacion es incorrecto*";
  }
  if ($_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
    $errores['file']="Es necesario cargar un documento*";
   }
  if(!validarvalor($sexo)){
    $errores['sexo']="Debe seleccionar una opcion*";
  }
 
  if(!validarvalor($terminos)){
    $errores['terminos']= "Tiene que aceptar los terminos y condiciones para poder seguir*";
  }

 

}

session_start();

if(isset($_POST["submit"])){
   
    
    $_SESSION['errores']=$errores;
    header('Location: index.php');
    $_POST==NULL;

      if(!$_SESSION['errores']){
    $_SESSION['datos']=array(nombre => $nombre, correo=>$correo, telefono=>$telefono, ubicacion=>
    $ubicacion, sexo=> $sexo, terminos=>$terminos);
      
    $_SESSION['ventana']='true';
    header('Location: tabla.php');
   
  }
  
}



?>

