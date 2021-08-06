<?php include("../template/cabecera.php"); ?>

<?php 

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"ID";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"Nombre";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']["name"]:"Imagen";
$accion=(isset($_POST['accion']))?$_POST['accion']:"Aaccion";

echo $txtID."<br/>";    
echo $txtNombre."<br/>";
echo $txtImagen."<br/>"; 
echo $accion."<br/>"; 

?>

<div class="col-md-5">
    
    <div class="card">
        <div class="card-header">
            Datos de Libro
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" >

            <div class = "form-group">
            <label for="txtID">ID:</label>
            <input type="texto" class="form-control" name="txtID" id="txtID"  placeholder="Ingres el ID">
            </div>

            <div class = "form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="texto" class="form-control" name="txtNombre" id="txtNombre"  placeholder="Nombre del Libro">
            </div>

            <div class = "form-group">
            <label for="txtImagen">Imagen:</label>
            <input type="file" class="form-control" name="txtImagen" id="txtImagen"  placeholder="Ingresar la imagen del libro">
            </div>

            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
            </div>

            </form>

 
        </div>


    </div>


    
    

</div>
<div class="col-md-7">
    <table class="table table-border">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>2</td>
                <td>Aprender PHP con Ovaldo</td>
                <td>Imagen.jpg</td>
                <td>Sleccionar | Borrar</td>
            </tr>

        </tbody>
    </table>


</div>

<?php include("../template/pie.php"); ?>
