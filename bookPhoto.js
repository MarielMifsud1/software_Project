function valid()
{
    var value1 = document.getElementById("txtName").value;
    var value2 = document.getElementById("txtSurname").value;
    var value3 = document.getElementById("txtEmail").value;
    var value4 = document.getElementById("options").value;
    var value5 = document.getElementById("options2").value;
    var value6 = document.getElementById("location").value;
    var value7 = document.getElementById("date").value;
    var value8 = document.getElementById("time").value;
    
    if(value1 == "" || value2 == "" || value3 == "" || value4 == "..." || value5 == "...." || value6 == "" || value7 == "" || value8 ==  "")
        {
            alert("Some fields where empty");
        }
}

