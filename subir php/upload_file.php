<?php
//Tamaño y Formatos permitidos

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 1000000)) { //Manejo de error de archivo if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "
";
    }
  
    {
    //Muestra informacion del archivo subido

    echo "Upload: " . $_FILES["file"]["name"] . "
";


     //Verifica si el archivo existe

    if (file_exists("img/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {		
  $name = basename($_FILES["file"]["name"]);
  list($base,$extension) = explode('.',$name);
    $newname = implode('.', [$base, time(), $extension]);
    move_uploaded_file($_FILES["file"]["tmp_name"], "img/" . $newname);

	echo "Almacenado en: " . "img/" . $_FILES["file"]["name"];

	$nombreArchivo = $_FILES["file"]["name"];

        // Muestra la imagen subida
        echo "<img src='img/$nombreArchivo'>";
      }
    }
  }
else
  {
  echo "Archivo invalido, Solamente archivos GIF, JPG y PNG son permitidos";
  }
?>