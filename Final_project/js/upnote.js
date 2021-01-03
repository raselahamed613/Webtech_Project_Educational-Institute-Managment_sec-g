
function validate()
{
	var note = document.getElementById("file").value;


	if(note =="" )
	{
		document.getElementById("message").innerHTML="Not Success!! again choose your file";
		return false;
	}
	else
	{
		document.getElementById("message").innerHTML="Successfully Upload Done!!";
		return true;
	}

}
