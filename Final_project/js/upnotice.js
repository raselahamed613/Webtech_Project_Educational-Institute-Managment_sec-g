
function validate()
{
	var doc = document.getElementById("text").value;


	if(doc =="" )
	{
		document.getElementById("message").innerHTML="Not Success!! re-check this form";
		return false;
	}
	else
	{
		document.getElementById("message").innerHTML="Successfully Upload Done!!";
		return true;
	}

}
