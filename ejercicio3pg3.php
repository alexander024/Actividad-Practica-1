<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 3</title>
<style type="text/css">
body {
    background-color: #D6EAF8;
}
</style>
</head>

<body>
	<form method="POST" action="final.php">
<table width="100%" cellpadding="1" cellspacing="0">
  <tbody>
    <tr>
      <td bgcolor="#FBFCFC"><strong>
      <h2>Datos del hijo/a</h2></strong></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">Nombre:
      <input name="textfield" type="text" required="required" id="textfield"></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">Apellido:
      <input name="textfield2" type="text" required="required" id="textfield2"></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">Dirección:
      <input name="textfield3" type="text" required="required" id="textfield3"></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">Edad
      :
      <input name="number" type="number" required="required" id="number"></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">Genero:
        <select name="select2" id="select2">
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">Telefono:
      <input name="textfield5" type="text" required="required" id="textfield5"></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">DUI
      <input name="textfield6" type="text" required="required" id="textfield6"></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">NIT
      <input name="textfield7" type="text" required="required" id="textfield7"></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC">Fecha nacimiento:
      <input type="date" name="date" id="date"></td>
    </tr>
    <tr>
      <td bgcolor="#FBFCFC"><input type="submit" name="submit" id="submit" value="Enviar"></td>
    </tr>
  </tbody>
</table>
</body>
</html>