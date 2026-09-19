<%@ Language=VBScript %>
<%
	Url = Request.ServerVariables("URL")
	AUrl = split(Url, "/",-1)
'	for a = 0 to ubound(AUrl)
'		Response.Write Aurl(a) & "<BR>"
'	next
	DirUtente = ubound(AUrl) - 1
'	Response.Write dirutente
	Set Conn = Server.CreateObject("ADODB.Connection")
	RSConn = "dsn=odbcinterfreezone" 
	Conn.Open RSConn
	SQLCerca = "Select codice from RagioneSociale where cod_clie = '" & AUrl(DirUtente) & "'"
	Set rsPr=Conn.Execute(SQLCerca)
	if rsPr.eof = false then
'		Response.Write(rsPr.fields("codice"))
		Response.Redirect("http://www.interfreezone.org/db/coprightmenu.asp?recordset1_Action=Find('codice','" & rsPr.fields("Codice") & "')&Recordset1_Position=FIL%3AORD%3AABS%3A1KEY%3A" & rsPr.fields("Codice") & "PAR%3A") 
	end if
%>