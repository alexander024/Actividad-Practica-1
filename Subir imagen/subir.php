<?php
$max=1500000;

$hh=date("H")+8;
$hora = date("d-m-Y $hh:i:s"); 
mkdir ($nuevodirectorio);
$uploaddir = 'archivos2';
$filesize = $_FILES['upfile']['size'];
$filename = trim($_FILES['upfile']['name']); 
$filename = substr($filename, -20); 
$filename = ereg_replace(" ", "", $filename);
if($filesize < $max){
if($filesize > 0){ 
if((ereg(".jpg", $filename)) || (ereg(".gif", $filename)) || (ereg(".JPG", $filename))|| (ereg(".GIF", $filename))){
$uploadfile = $uploaddir . $filename;
if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)) {
print("Archivo subido correctamente");
} else {
print("Error de conexi&oacute;n con el servidor.");
}
} else {
print("Sólo se permiten imágenes en formato jpg. y gif., no se ha podido adjuntar.");
}
}
{
print("<br><br>Campo vac&iacute;o, no ha seleccionado ninguna imagen");
}
}
else {
print("<br><br>La imagen que ha intentado adjuntar es mayor de 1.5 Mb, si desea cambie el tamaño del archivo y vuelva a intentarlo.");
}
?> 