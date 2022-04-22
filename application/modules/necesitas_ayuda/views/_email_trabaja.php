<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nevados de Chillan</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet" />
<style>
body {
	font-family: 'Open Sans', sans-serif;
	margin: 0;
	padding: 0;
}
table p, table, h1, table td {
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
}
a, table a {
	color: #00599b;
	text-decoration: none;
}
a:hover, table a:hover {
	text-decoration: underline;
}
</style>
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Open Sans', sans-serif;">
  <tr>
    <td><div style="width:720px; margin:0 auto;">
        <h1 style="font-size:24px; color:#333; margin-bottom:30px;">Formulario de Trabaja con nosotros</h1>
        <!-- <p style="font-size:15px; color:#333; margin:0 0 30px;">Texto descriptivo del contenido que se publicará en este bloque de texto descriptivo del contenido que se publicará en este bloque de texto descriptivo del contenido que se publicará en este bloque de texto.</p> -->
        <table border="0" cellpadding="10" cellspacing="0" style="font-size:15px; margin:0 0 40px;">
          <tbody>
            <tr bgcolor="#f0f0f0">
              <td bgcolor="#f0f0f0" style="color:#666; font-size:15px;">Nombre Completo:</td>
              <td bgcolor="#f0f0f0" style="color: #333; font-size: 15px;"><?php echo $tcn_nombre_completo; ?></td>
            </tr>
            <tr>
              <td bgcolor="#f0f0f0" style="color:#666; font-size:15px;">Correo Electronico:</td>
              <td bgcolor="#f0f0f0" style="color: #333; font-size: 15px;"><?php echo $tcn_email; ?></td>
            </tr>
            <tr>
              <td bgcolor="#f0f0f0" style="color:#666; font-size:15px;">Teléfono:</td>
              <td bgcolor="#f0f0f0" style="color: #333; font-size: 15px;"><?php echo $tcn_telefono; ?></td>
            </tr>
            <tr>
              <td bgcolor="#f0f0f0" style="color:#666; font-size:15px;">Area de trabajo:</td>
              <td bgcolor="#f0f0f0" style="color: #333; font-size: 15px;"><?php echo $asunto; ?></td>
            </tr>
            <tr>
              <td bgcolor="#f0f0f0" style="color:#666; font-size:15px;">Fecha:</td>
              <td bgcolor="#f0f0f0" style="color: #333; font-size: 15px;"><?php echo invierte_fecha($tcn_fecha,'-'); ?></td>
            </tr>
            <tr>
              <td bgcolor="#f0f0f0" style="color:#666; font-size:15px;">Hora:</td>
              <td bgcolor="#f0f0f0" style="color: #333; font-size: 15px;"><?php echo $tcn_hora; ?></td>
            </tr>



          </tbody>
        </table>

      </div></td>
  </tr>

</table>
</body>
</html>
