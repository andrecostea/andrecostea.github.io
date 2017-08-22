<%
'Sends an email
Dim mail
Set mail = Server.CreateObject("CDO.Message")
mail.To = Request.Form("To")
mail.From = Request.Form("From")
mail.Subject = Request.Form("Subject")
mail.TextBody = Request.Form("Body")
mail.Send()
Response.Write("Mail Sent!")
'Destroy the mail object!
Set mail = nothing
%>