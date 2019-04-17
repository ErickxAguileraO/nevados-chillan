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

            <!--
            <tr>
              <td style="color:#666; font-size:15px;">Comuna:</td>
              <td style="color: #333; font-size: 15px;">  <?php //if($comuna){ echo $comuna; } ?>  </td>
            </tr>  -->

          </tbody>
        </table>
        <!-- <p style="font-size:15px; color:#333; margin:0 0 20px;">Texto descriptivo del contenido que se publicará en este bloque de texto descriptivo del contenido que se publicará en este bloque de texto descriptivo.</p> -->
        <!--<p style="font-size:15px; color:#333; margin:0 0 60px;">Atentamente, Grupo Saesa</p>-->
      </div></td>
  </tr>
  <!--<tr>
    <td bgcolor="#dbdbdb"><table width="740" border="0" align="center" cellpadding="20" cellspacing="0">
        <tr>
          <td valign="middle"><img src="<?php echo "https://{$_SERVER[HTTP_HOST]}"; ?>/imagenes/template/saesa.png" width="220" height="47" alt="Grupo SAESA" /></td>
          <td valign="top" style="font-size:13px; font-family: 'Open Sans', sans-serif;">info@saesa.cl<br />
            600 4012020<br />
            Bulnes 441, Osorno, Chile</td>
          <td valign="top" style="font-size:13px; font-family: 'Open Sans', sans-serif;"><a href="#">Frontel</a><br />
            <a href="#">Saesa</a><br />
            <a href="#">Luz osorno</a><br />
            <a href="#">Edelaysen</a></td>
        </tr>
      </table></td>
  </tr>-->
</table>
</body>
</html>
