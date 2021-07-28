<?php
$conexion = mysqli_connect("db", "admin", "test", "resume");
$apellido = $_POST["apellido"];
$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$estudios = $_POST["estudiaos"];
$titulo = $_POST["titulo"];
if($_FILES["archivo"]){
    $nombre_base = basename($_FILES["arvhivo"]["name"]);
    $nombre_final = $apellido. "_" . $nombre. "_". $nombre_base. "-". date("m-d-y");
    $ruta = "archivos/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
    if($subirarchivo){
         $insertarSQL = "INSERT INTO curriculum(apellido, nombre, fecha, telefono, email, estudios, titulo, archivo) VALUES('$apellido', '$nombre', '$fecha', '$telefono', '$email', '$estudios', '$titulo', '$ruta')";
        $resultado = mysqli_query($conexion, $insertarSQL);
        if($resultado){
            echo "<script>alert('Se ha enviado el curriculum'); window.location='index.html'</script>";
        } else {
            printf("Errormessage: %s\n", mysqli_error($conexion));
        }
    } 
} else {
    echo "Error al subir  archivo";
}
?>
