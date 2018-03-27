
function getName(){
    var val_name = document.getElementById('name').value;
    val_name_l=name.value.length;
    if(val_name_l == 0 ){
        document.getElementById('nameError').innerHTML= val_name;
        alert(cannot be empty);
    }
}

function getEmail(){
	var val_email = document.getElementById('email').value;
	alert(val_email);
	document.getElementById('nameError').innerHTML= val_email;
}

function getPass(){
    var val_pass = document.getElementById('pass').value;
    var val_pass_length=pass.value.length;
    if(val_pass_length == 0 || val_pass_length <=4)
    {
        alert(Password cannot be empty and length cannot be less then 4);
        paa.focus();
        return false;
    }
    return true;
}
	
	//document.getElementById('nameError').innerHTML= val_pass;
//}

/*nction passid_validation(passid,mx,my)
{
var passid_len = passid.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}*/