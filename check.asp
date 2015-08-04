<%@ LANGUAGE="VBSCRIPT" %>
<%

	if request("wachtwoord") = "familie" THEN
		Session("Checked") = "yes"
		response.redirect("FamilieNieuws.asp")
	ELSE
		response.redirect("login.asp?error=") & Server.URLEncode("Wachtwoord incorrect of verlopen.")

	END IF

%>