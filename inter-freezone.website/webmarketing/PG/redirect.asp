<%@LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<% NOME = request.form("cli") %>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000033;
}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
	color: #000066;
}
.Stile1 {	color: #FF0000;
	font-family: Arial, Helvetica, sans-serif;
}
.Stile2 {	color: #FF0000;
	font-weight: bold;
}
.style5 {color: #FFFFCC}
.style6 {color: #FFFFCC; font-family: Arial, Helvetica, sans-serif; }
.style7 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body bgcolor="#000066" topmargin="20">
<div align="center">
  <table width="600" border="0" cellpadding="2" cellspacing="5" bgcolor="#CCCCCC">
    <tr>
      <td bgcolor="#FFFF33"><div align="center"><span class="style4">INTER-MARKETS-CONSORTIUMS-ASSOCIATES-NETWORK Service</span></div></td>
    </tr>
    <tr>
      <td bordercolor="#FFFFCC" bgcolor="#FFFF99"><p align="center" class="style1">Welcome <strong>
          <%response.write NOME%>
      </strong> , click <a href="http://www.interfreezone.org/webmarketing/PG/ACCESSOPERSONALE/<%response.write NOME%>REST.HTM">here  </a>to check if your personal documentation is available. </p></td>
    </tr>
  </table>
  <p><b><span class="style6">For a new password send e-mail indicating your company data</span><span class="style5"><br /> 
    <a href="mailto:info@interfreezone.org"><img src="ItDetail_file/bback_dw.gif" width="32" height="32" border="0" /></a><span class="style7"> MAIL NOW</span></span></b></p>
</div>
</body>


</html>
