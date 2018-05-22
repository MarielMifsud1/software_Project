function wedding()
{
    var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("wed").value;
    
    if(value1 == value2)
    {
           window.location.assign("./weddingEvent.php");
    }
}

function baptisim()
{
    var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("bapt").value;
    
    if(value1 == value2)
    {
           window.location.assign("./baptismEvent.php");
    }
    
}
function communion()
{
     var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("holy").value;
    
    if(value1 == value2)
    {
           window.location.assign("./holy.php");
    }
}
function maternity()
{
    var value1  = document.getElementById("options").value;
    var value2 = document.getElementById("maternity").value;
    
    if(value1 == value2)
    {
           window.location.assign("./maternity.php");
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


function validation2()
{
    
    var text1 = document.getElementById("txtName").value;
    var text2 = document.getElementById("txtSurname").value;
    var text3 = document.getElementById("txtEmail").value;
    var text4 = document.getElementById("options").value;
    var text5 = document.getElementById("date").value;
    var text6 = document.getElementById("time").value;
    var text7 = document.getElementById("address").value;
    
    if(text1 == "" || text2 == "" || text3 == "" || text4 == "..." || text5 == "" || text6 == "" || text7 == "" )
        {
            alert("Some fields where left empty");
        }
    
}

function validation3()
{
    var text1 = document.getElementById("txtName2").value;
    var text2 = document.getElementById("txtSurname2").value;
    var text3 = document.getElementById("txtEmail").value;
    var text4 = document.getElementById("Lchurch").value;
    var text5 = document.getElementById("date").value;
    var text6 = document.getElementById("time").value;
    
      if(text1 == "" || text2 == "" || text3 == "" || text4 == "..." || text5 == "" || text6 == "" || text7 == "" )
        {
            alert("Some fields where left empty");
        }
    
    
}
function validation4()
{
    var text1 = document.getElementById("BrideName").value;
    var text2 = document.getElementById("GroomName").value;
    var text3 = document.getElementById("txtEmail").value;
    var text4 = document.getElementById("BAddress").value;
    var text5 = document.getElementById("GAddress").value;
    var text6 = document.getElementById("Lchurch").value;
    var text7 = document.getElementById("Lhall").value;
    var text8 = document.getElementById("options3").value;
    
    if(text1 == "" || text2 == "" || text3 == "" || text4 == "" || text5 == "" || text6 == "" || text7 == "" || text8 == "...." )
        {
            alert("Some fields where left empty");
        }
}
function validation5()
{
    var text1 = document.getElementById("txtName").value;
    var text2 = document.getElementById("txtSurname").value;
    var text3 = document.getElementById("txtEmail").value;
    var text4 = document.getElementById("txtContact").value;
    var text5 = document.getElementById("txtArea").value;
    
     if(text1 == "" || text2 == "" || text3 == "" || text4 == "" || text5 == "")
            {
            alert("Some fields where left empty");
        }
}
function cancel()
{
    var btn = document.getElementsByClassName("cancelbtn").value;
    
      window.location.assign("./home.php");
}


