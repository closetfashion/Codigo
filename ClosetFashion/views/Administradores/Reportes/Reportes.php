<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reportes</title>
<style type="text/css">
.TITULO {
	color: #FFF;
	font-size: larger;
	font-weight: bold;
	text-align: center;
	font-family: "Comic Sans MS", cursive;
}
.LETRA {
	color: #FFF;
	font-weight: bold;
	font-size: larger;
	font-family: "Comic Sans MS", cursive;
}
.LETRA1 {
	color: #FFF;
	font-size: larger;
}
.LETRA2 {
	color: #FFF;
	font-size: larger;
	font-weight: bold;
	text-align: center;
}
.LETRA3 {
	color: #FFF;
	font-size: larger;
	font-weight: bold;
	text-align: center;
}
.letra1 {
	font-family: "Comic Sans MS", cursive;
}
.letra2 {
	font-family: "Comic Sans MS", cursive;
}
.letra3 {
	font-family: "Comic Sans MS", cursive;
}
.letra1 {
	font-weight: bold;
}
.letra2 {
	font-weight: normal;
}
.letra2 {
	font-weight: bold;
}
body,td,th {
	font-family: "Comic Sans MS", cursive;
	font-size: 24px;
}
a {
	font-family: "Comic Sans MS", cursive;
	color: #FFF;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.TITULO {
	font-family: Comic Sans MS, cursive;
}
</style>
</head>
<body bgcolor="#000000">
<p align="center" class="TITULO">Reportes</p>
<center>
<br />
</center>
<center>
<table border="3" width="346" bgcolor="#000000">
<td width="50" height="50"><strong class="LETRA1"> <center spry:repeatchildren="letra1">
  <a href="reporte_pdf.php">Reportes PDF </a>
</center> </strong></td>
</tr>
<tr>
<td height="50"><strong class="LETRA2"> <center spry:repeatchildren="letra2">
  <a href="reporte_excel.php">Reportes EXCEL</a>
</center></strong></td>

<tr>
<td height="50"><strong class="LETRA3"> <center spry:repeatchildren="letra3">
  <a href="reporte_word.php">Reportes WORD </a>
</center></strong></td>
</tr>

<tr>
<td height="50"><strong class="LETRA3"> <center spry:repeatchildren="letra3">
  <a href="reporte_txt.php">Reportes TXT </a>
</center></strong></td>
</tr>
</table>
</center> 

</body>