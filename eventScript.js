function wedding()
{
    var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("wed").value;
    
    if(value1 == value2)
    {
           window.location.assign("./gallery.html");
    }
}

function validation()
{
    
    var Fname =  document.getElementById("txtName2").value;
    var Surname = document.getElementById("txtSurname2").value;
    var email = document.getElementById("txtEmail").value;
    var choice = document.getElementById("options").value;
    
    if(Fname == "" || Surname == "" || email == "" || choice == "...")
        {
            alert("Some fields where empty");
        }
    
    else
        {
            wedding();
        }
    
}