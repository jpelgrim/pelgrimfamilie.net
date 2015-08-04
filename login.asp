<%@ LANGUAGE="VBSCRIPT" %>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta http-equiv="Content-Language" content="nl">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>Inloggen</title>
</head>

<body background="img/Agrondwandelaar.jpg">
<P>&nbsp;</P>
<h2 align="center"><font color="#FFFFFF">A</font></h2>
<P>&nbsp;</P>
<P align="center"><font color="#800000"><b>Om de 'Pelgrim-Familie-Pagina' te bezoeken
dient u het wachtwoord in te vullen:<br>
Indien vergeten vraag het <a href="mailto:jan.pelgrim@worldonline.nl">hier.</a></b></font></P>
<% If Request("error") <> "" Then %>
<HR><CENTER><FONT SIZE=-1 FACE="VERDANA,ARIAL,MS SANS SERIF,HELVETICA"><H3><EM><%=Request("error")%><img border="0" src="img/buttpelgrim.gif"></EM></H3></CENTER><HR>
<% End If %><BR>
<FORM ACTION=check.asp>
<P align="center"><font color="#800000"><b>Wachtwoord:</b></font> <INPUT TYPE=text name=wachtwoord SIZE=15> <INPUT TYPE=SUBMIT VALUE= " Controleer ">
</FORM>


</BODY>
</HTML>