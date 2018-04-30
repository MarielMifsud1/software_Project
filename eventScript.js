function wedding()
{
    var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("wed").value;
    
    if(value1 == value2)
    {
           window.location.assign("./weddingEvent.html");
    }
}

function baptisim()
{
    var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("bapt").value;
    
    if(value1 == value2)
    {
           window.location.assign("./baptismEvent.html");
    }
    
}
function communion()
{
     var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("holy").value;
    
    if(value1 == value2)
    {
           window.location.assign("./holy.html");
    }
}
function maternity()
{
    var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("maternity").value;
    
    if(value1 == value2)
    {
           window.location.assign("./maternity.html");
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
            baptisim();
            communion();
            maternity();
        }
    
}