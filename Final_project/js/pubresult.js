
function validate()
{
	var sem = document.getElementById("semester").value;
	var sid =document.getElementById("student_id").value;
	var subject =document.getElementById("subject_name").value;
	var marks =document.getElementById("marks").value;
	


	if(sem =="" ||sid =="" || subject =="" || marks =="")
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
