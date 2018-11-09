function validateform()
    {
     var x=document.forms["myform"]["username"].value;
     if (x=="")
     {
     	alert("Mandatory field must be filled out");
        form.username.focus();
     	return false;
     }
     

  

     var y=document.forms["myform"]["email"].value;
     if (y=="")
     {
     	alert("Mandatory field must be filled out");
        form.username.focus();
     	return false;
     }
     if(y.indexOf('@')<=0)
    {
        alert("Invalid email!!!")
        //form.email.focus();
        return false;
 }


     var z=document.forms["myform"]["password"].value;
     if (z=="")
     {
     	alert("Mandatory field must be filled out");
        
     	return false;
     }
     
      

    var a= document.forms["myform"]["password"].value;
    var b= document.forms["myform"]["confirm_password"].value;
    if (a!=b)
    {
      alert("Password Dismatch");
      return false;

    }
  }