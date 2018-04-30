function eventPlace()
{
    var option1 = document.getElementById("options").value;
    var option2 = document.getElementById("home").value;
    var ins;
    
    if(option1 == option2)
        {
            ins = document.getElementById("space").innerHTML = "<br>Home Address: <br> <input style='margin-top:1%;' type='text' class='form-control' size='100' placeholder='Home address' id='Haddress'>"
        }
    else
        {
            ins = document.getElementById("space").innerHTML = "<br>Outdoor Address: <br> <input style='margin-top:1%;' type='text' class='form-control' size='100' placeholder='Outdoor address' id='Oaddress'>"
        }
    
}