
function validate()
{
	var studentId = document.getElementById("id").value;
	var studentName =document.getElementById("studentname").value;
	var f_name =document.getElementById("fathername").value;
	var m_name =document.getElementById("mothername").value;
	var dob =document.getElementById("dob").value;
	var contact =document.getElementById("contact_number").value;
	var email =document.getElementById("email").value;
	var nationality =document.getElementById("nationality").value;
	var religion =document.getElementById("religion").value;
	var picture =document.getElementById("picture").value;



	if(studentId =="" ||studentName =="" || f_name =="" || m_name =="" || dob == "" || contact =="" || email =="" || nationality =="" || religion =="" || picture =="")
	{
		document.getElementById("message").innerHTML="Not Success!! re-check this form";
		return false;
	}
	else
	{
		document.getElementById("message").innerHTML="Successfully Done!!";
		return true;
	}

}
