// JavaScript Document

//Validation:

function validate(formname)
{
	
	//Email Validation
	var email = document.forms[formname]["email"].value;
	var atposition=email.indexOf("@");
	var dotposition=email.lastIndexOf(".");
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)
  	{
  		alert("Not a valid e-mail address");
  		return false;
  	}
}